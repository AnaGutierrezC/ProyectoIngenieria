<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etiquetas = ['Installation','About Sales','Request','Account'];
        foreach($etiquetas as $etiqueta){
            DB::table('etiquetas')->insert([
                'nombre'=> $etiqueta
            ]);
        }
    }
}
