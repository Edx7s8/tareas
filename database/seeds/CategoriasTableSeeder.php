<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        public fuction(){
 /** DB es un clase de intermedio  */
           \ DB::table('categorias')->insert(['nombre_categoria' =>'Personl']); /** fachada */
            \DB::table('categorias')->insert(['nombre_categoria'=>'Escuela']);

            Categoria::create(['nombre_categoria' => 'Trabajo']);
            
        }
    }
}
