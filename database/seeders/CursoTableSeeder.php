<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('curso')->delete();
        
        DB::table('curso')->insert(array (
            0 => 
            array (
                'id_curso' => 1,
                'curso' => 'Base de datos avanzadas',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_curso' => 2,
                'curso' => 'Mejora continua',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_curso' => 3,
                'curso' => 'Ingenieria de requerimientos de software',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_curso' => 4,
                'curso' => 'Fundamentos de programacion',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_curso' => 5,
                'curso' => 'Animacion 3D',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_curso' => 6,
                'curso' => 'Bases de datos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
        ));
    }
}
