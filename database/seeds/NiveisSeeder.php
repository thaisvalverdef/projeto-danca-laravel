<?php

use Illuminate\Database\Seeder;
use App\Niveis;
use App\Professor;

class NiveisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Niveis::create([
            'niveis' => 'Iniciante'            
        ]);
        Niveis::create([
            'niveis' => 'Intermediário'            
        ]);
        Niveis::create([
            'niveis' => 'Avançado'            
        ]);
        Niveis::create([
            'niveis' => 'Todos'            
        ]);
    }
}
