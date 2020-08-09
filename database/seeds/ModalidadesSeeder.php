<?php

use Illuminate\Database\Seeder;
use App\Modalidades;
use App\Professor;

class ModalidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modalidades::create([
            'modalidades' => 'Ballet'            
        ]);
        Modalidades::create([
            'modalidades' => 'Contemporâneo'            
        ]);
        Modalidades::create([
            'modalidades' => 'Dança de Salão'            
        ]);
        Modalidades::create([
            'modalidades' => 'Dança do Ventre'            
        ]);
        Modalidades::create([
            'modalidades' => 'Funk'            
        ]);
        Modalidades::create([
            'modalidades' => 'Hip Hop/Break'            
        ]);
        Modalidades::create([
            'modalidades' => 'Jazz'            
        ]);
        Modalidades::create([
            'modalidades' => 'Samba'            
        ]);
        Modalidades::create([
            'modalidades' => 'Sapateado'            
        ]);
        Modalidades::create([
            'modalidades' => 'Sertanejo'            
        ]);
        Modalidades::create([
            'modalidades' => 'Outros'            
        ]);
    }
}
