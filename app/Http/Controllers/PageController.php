<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Http\Requests;

class PageController extends Controller
{
    public function index()
    {
      
    	$pages = Page::orderBy('id', 'ASC')->get();
    	//dd($pages);
    	return view('paginas.index')->with('pages', $pages);
      

/**
      $configs = Page::getAll();
      
      dd($configs);
      return View('paginas.index',[
         'configs' => $configs
        ]);
*/

    }


    public function create()
    {
      return view('paginas.create');
    }


    public function store(Request $request)
    {
      $page = new Page($request->all());
      $page->save();
      //dd($page);
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
      $page = Page::find($id);
      //dd($page);
      return view('paginas.edit')->with('page', $page);
    }

    public function update(Request $request, $id)
    {
      $page = Page::find($id);
      $page->fill($request->all());
      $page->save();

    }

    public function destroy($id)
    {

    }
}

//fill -> significa literalmente llenar, cuando se utiliza el metodo fill en un modelo, se establece los atributos del modelo a los que le pasamos como argumento en unarray
//se puede uasar tanto en una instancia nuevo de un modelo, como con una existente, simplemente establece atributos de forma masiva