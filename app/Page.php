<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Exception;
use Log;
use DB;

class Page extends Model
{
    protected $table = 'pages';

    protected $fillable = ['name', 'title', 'banner', 'images', 'content'];

    protected $hidden = [];


	public static function getByTitle($title){
		$row = Page::where('title', $title)->first();
		if(isset($row->content)){
			return $row->content;
		}else{
			return false;
		}
	}

	public static function getAll(){
		$configs = array();
		$configs_db = Page::all();
		foreach ($configs_db as $row){
			$configs[$row->title] = $row->value;
		}
		return (object) $configs;
	}

}