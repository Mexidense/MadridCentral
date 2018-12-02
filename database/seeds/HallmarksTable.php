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
        try
        {
            $filename = 'dgtFiles/export_distintivo_ambiental.txt';
            $file = File::get(storage_path($filename));

            $header = true;
            foreach(explode("\n", $file) as $line) {
                if($header){
                    $header = false;
                    continue;
                }
                $explodeLine = explode('|', $line);

                DB::table('hallmarks')->insert([
                    'plate' => $explodeLine[0],
                    'tag' => $explodeLine[1],
                ]);
//                echo ($explodeLine[0]);
            }
        }
        catch (\Symfony\Component\HttpFoundation\File\Exception\FileException $exception)
        {
            die("Error: " . $exception);
        }
    }
}
