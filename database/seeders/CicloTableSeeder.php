<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CicloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ciclo')->delete();
        
        DB::table('ciclo')->insert(array (
            0 => 
            array (
                'id_ciclo' => 1,
                'ciclo' => 'I',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_ciclo' => 2,
                'ciclo' => 'II',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_ciclo' => 3,
                'ciclo' => 'III',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_ciclo' => 4,
                'ciclo' => 'IV',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_ciclo' => 5,
                'ciclo' => 'V',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_ciclo' => 6,
                'ciclo' => 'VI',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));
    }
}
