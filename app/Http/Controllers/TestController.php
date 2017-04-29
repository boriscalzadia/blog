<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//necesito usar la clase articles
use App\Article;

class TestController extends Controller
{
    //
	public function view ($id)
	{
		$article = Article::find($id);
		  //each funcion que hace las relaciones
			$article -> category;
			$article -> user;
			$article -> tags; 

//		dd($article);
			//return view ('test.index');
			return view ('test.index', ['article' => $article]);
	}
}
