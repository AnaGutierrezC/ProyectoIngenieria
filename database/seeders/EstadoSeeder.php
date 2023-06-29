<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prioridades = ['En cola','En curso','Finalizado'];
        foreach($prioridades as $priority){
            DB::table('estados')->insert([
                'nombre'=> $priority
            ]);
        }
    }
}
