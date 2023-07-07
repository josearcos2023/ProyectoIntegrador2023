<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspecialidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidades')->delete();
        
        DB::table('especialidades')->insert(array (
            0 => 
            array (
                'id_especialidad' => 1,
                'especialidad' => 'Diseno y desarrollo de software',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id_especialidad' => 2,
                'especialidad' => 'Diseno y desarrollo de videojuegos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id_especialidad' => 3,
                'especialidad' => 'Mecatronica industrial',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id_especialidad' => 4,
                'especialidad' => 'Data Science',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id_especialidad' => 5,
                'especialidad' => 'Gestion estrategica de mantenimiento',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id_especialidad' => 6,
                'especialidad' => 'Control de sistemas electricos',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            
        ));
    }
}
