<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
        'nome', 'descricao', 'valor', 'quantidade', 'categoria_id'
    ];

    public function categoria(){

    	return $this->belongsTo(Categoria::class);
    }
}
