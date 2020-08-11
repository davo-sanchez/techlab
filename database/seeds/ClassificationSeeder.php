<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            [
                'code' => 'MB',
                'name' => 'Mother Boards'
            ],
            [
                'code' => 'RAM',
                'name' => 'Memoria RAM'
            ],
            [
                'code' => 'SNT',
                'name' => 'Servicio de redes'
            ],
        ]);
    }
}
