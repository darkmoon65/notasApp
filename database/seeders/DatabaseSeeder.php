<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'titulo' => 'Grupo '.Str::random(2),
            'descripcion' => Str::random(10) ,
        ]);
    }
}
