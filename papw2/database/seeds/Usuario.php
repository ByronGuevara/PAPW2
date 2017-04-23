<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model; 

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('usuarios')->insert([
        	'nombre' => 'Fernando Reyes', 
        	'email' => 'fer@gmail.com',
        	'contrasenia' => bcrypt('1')
        ]);
        
    }
}
