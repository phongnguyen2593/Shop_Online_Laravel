<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();
        DB::table('brands')->insert([
            [
                'name'      =>  'Acecook',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Heineken',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Coca Cola',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Vinamilk',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Trung Nguyên Legend',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Lai Phú',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Mentos',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Oishi',
                'thumbnail' =>  'aaaa'
            ],
            [
                'name'      =>  'Orion',
                'thumbnail' =>  'aaaa'
            ],
        ]);
    }
}
