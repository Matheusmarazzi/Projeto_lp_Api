<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cliente;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Cliente::create( ['nome'=>'Jose','cpf'=>'123',
            'dataNascimento'=>'1990-01-01'] );

        Cliente::create( ['nome'=>'Maria','cpf'=>'456',
            'dataNascimento'=>'1992-02-02'] );
    }
}
