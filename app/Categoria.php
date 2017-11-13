<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

	 protected $fillable = [
        'nome'
    ];

     public function produto(){
     	
    	return $this->hasMany(Product::class);
    }
}
