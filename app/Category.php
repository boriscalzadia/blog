<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
	protected $table = "categories";
	
	protected $fillable =['name']; //Campos a mostrar
	//creando relacion uno a muchos  nombre de tabla 
	public function articles(){  //nombre en plural porque una categoria puede tener muchos articulos
		
		return $this ->hasMany('App\Article'); //Category a articulos
		
		
	}
	
}
