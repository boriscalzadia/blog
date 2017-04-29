<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
	protected $table = "articles";
	
	protected $filltable =['title', 'content', 'category_id', 'user_id' ];
	
	public	function category() {  //singular porque un articulo solo puede tener una categoria
		
		return $this ->belongsTo('App\Category');
		
	}
	public function user ()
	{
		return $this->belongsTo('App\User');
		
	}
	public function images ()
	{
		return $this->hasMany('App\Image');
		
	}
	
	public function tags() {
		
		return $this->belongsToMany('App\Tag');
		
	}
	
}
