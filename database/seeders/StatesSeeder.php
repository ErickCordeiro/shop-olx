<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            ["title" => "Acre"],
            ["title" => "Alagoas"],
            ["title" => "Amapá"],
            ["title" => "Amazonas"],
            ["title" => "Bahia"],
            ["title" => "Ceará"],
            ["title" => "Espírito Santo"],
            ["title" => "Goiás"],
            ["title" => "Maranhão"],
            ["title" => "Mato Grosso"],
            ["title" => "Mato Grosso do Sul"],
            ["title" => "Minas Gerais"],
            ["title" => "Pará"],
            ["title" => "Paraíba"],
            ["title" => "Paraná"],
            ["title" => "Pernambuco"],
            ["title" => "Piauí"],
            ["title" => "Rio de Janeiro"],
            ["title" => "Rio Grande do Norte"],
            ["title" => "Rio Grande do Sul"],
            ["title" => "Rondônia"],
            ["title" => "Roraima"],
            ["title" => "Santa Catarina"],
            ["title" => "São Paulo"],
            ["title" => "Sergipe"],
            ["title" => "Tocantins"],
            ["title" => "Distrito Federal"],
        ];

        State::insert($states);
    }
}
