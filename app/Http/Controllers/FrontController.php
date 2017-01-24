<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
//use Dwij\Laraadmin\Models\LAConfigs;
use App\Http\Requests;

class FrontController extends Controller
{
    public function nosotros()
    {
    	//$pages = Page::orderBy('id')->get();
    	//dd($pages);
    	//return $pages->toJson();
    	//return view('welcome');
    	//return view('welcome')->with('pages', $pages);
     $configs = Page::getAll();	
		dd($configs);
     return View('welcome')->with('configd', $configs);

    }
}
