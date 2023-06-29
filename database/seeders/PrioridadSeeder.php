<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PrioridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prioridades = ['Urgente','Alta','Media','Baja'];
        foreach($prioridades as $priority){
            DB::table('prioridades')->insert([
                'nombre'=> $priority
            ]);
        }
    }
}
