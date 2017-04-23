<?php

use Illuminate\Database\Seeder;

class Categoria extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categorias')->insert([
        	['categoria' => 'Acción'],
        	['categoria' => 'Romance'],
        	['categoria' => 'Drama'],
        	['categoria' => 'Antiguos'],
        	['categoria' => 'Ciencia ficción'],
        	['categoria' => 'Economia'],
        	['categoria' => 'Educación'],
        	['categoria' => 'Ciencia y tecnologia'],
        	['categoria' => 'Autoayuda'],
        	['categoria' => 'Otro']
        ]);

    }
}
