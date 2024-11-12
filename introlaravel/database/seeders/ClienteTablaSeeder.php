<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class ClienteTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Clientes')->insert([
            [
                'nombre'=>'Christian',
                'apellido'=>'Montavo',
                'correo'=>'chrismontalvo@gmial.com',
                'telefono'=>'4461135536'
            ],
            [
                'nombre'=>'Ivan',
                'apellido'=>'Isai',
                'correo'=>'ivan@gmial.com',
                'telefono'=>'4493738'
            ],
            [
                'nombre'=>'alex',
                'apellido'=>'tirado',
                'correo'=>'ale@gmial.com',
                'telefono'=>'43209420'
            ]]);
    }
}
