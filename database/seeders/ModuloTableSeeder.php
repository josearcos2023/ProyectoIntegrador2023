<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modulo')->delete();
        
        DB::table('modulo')->insert(array (
            0 => 
            array (
                'id_modulo' => 1,
                'modulo' => '1',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_modulo' => 2,
                'modulo' => '2',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_modulo' => 3,
                'modulo' => '3',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_modulo' => 4,
                'modulo' => '4',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_modulo' => 5,
                'modulo' => '5',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_modulo' => 6,
                'modulo' => '6',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id_modulo' => 7,
                'modulo' => '7',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id_modulo' => 8,
                'modulo' => '8',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id_modulo' => 9,
                'modulo' => '9',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id_modulo' => 10,
                'modulo' => '10',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id_modulo' => 11,
                'modulo' => '11',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id_modulo' => 12,
                'modulo' => '12',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id_modulo' => 13,
                'modulo' => '13',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id_modulo' => 14,
                'modulo' => '14',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id_modulo' => 15,
                'modulo' => '15',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id_modulo' => 16,
                'modulo' => '16',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),

        ));
    }
}
