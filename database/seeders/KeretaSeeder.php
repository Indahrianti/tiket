<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class KeretaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kereta = [
            ['no_plat'=>'12A 301','nama_KA'=>'Bahari', 'asal_id'=>1,'tujuan_id'=>2, 'harga'=>'120000'],
            ['no_plat'=>'12B 301','nama_KA'=>'Karya', 'asal_id'=>2, 'tujuan_id'=>3, 'harga'=>'130000'],
            ['no_plat'=>'12C 301','nama_KA'=>'Mulia', 'asal_id'=>3, 'tujuan_id'=>1, 'harga'=>'140000'],

        ];
        //masukan data ke database
        DB::table('keretas')->insert($kereta);
    }
}
