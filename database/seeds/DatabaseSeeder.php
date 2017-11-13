<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        Model::unguard();

        $this->call('CategoriaTableSeeder');
    }
}

    

class CategoriaTableSeeder extends Seeder{
    public function run(){

         \DB::table('categorias')->truncate();

         estoque\Categoria::create([
            'nome' => 'Informática',
            
        ]);

         estoque\Categoria::create([
            'nome' => 'eletronico',
            
        ]);
    }
}