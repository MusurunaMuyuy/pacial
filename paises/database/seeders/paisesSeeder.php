<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class paisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'colombia',
            'capital' => 'bogota',
            'idioma' => 'español',
            'poblacion' => '160',
            'created_at' => now(),
            'updated_at' => now()
        

        ]);
    }
}
