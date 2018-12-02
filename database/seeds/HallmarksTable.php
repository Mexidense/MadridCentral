<?php

use Illuminate\Database\Seeder;

class HallmarksTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Files::get(storage_path('dgtFiles/export_distintivo_ambiental.txt'));
    }
}
