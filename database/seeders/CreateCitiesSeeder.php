<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::insert([
            ['name' => "Москва", "slug" => "moscow"],
            ['name' => "Казань", "slug" => "kazan"],
            ['name' => "Новосибирск", "slug" => "novosibirsk"],
        ]);
    }
}
