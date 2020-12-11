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
                'thumbnail' =>  'uploads/brands/acecook-2015-img.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Heineken',
                'thumbnail' =>  'uploads/brands/Heineken-Logo.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Coca Cola',
                'thumbnail' =>  'uploads/brands/Coca-Cola-Logo-wine.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Vinamilk',
                'thumbnail' =>  'uploads/brands/00a2d11ed2dcb900592725a851bd8371.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Trung Nguyên Legend',
                'thumbnail' =>  'uploads/brands/logotapdoan0803.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Mentos',
                'thumbnail' =>  'uploads/brands/Mentos-Logo.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Oishi',
                'thumbnail' =>  'uploads/brands/logo-oishi-1.jpg',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Orion',
                'thumbnail' =>  'uploads/brands/orion-logo-png.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'OREO',
                'thumbnail' =>  'uploads/brands/png-transparent-oreo-logo-logo-oreo-cdr-encapsulated-postscript-oreo-miscellaneous-text-sticker.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Chupa Chups',
                'thumbnail' =>  'uploads/brands/Chupa-chups_logo.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Alpenliebe',
                'thumbnail' =>  'uploads/brands/alpenliebe-logo.jpg',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ], 
            [
                'name'      =>  'Pepsi',
                'thumbnail' =>  'uploads/brands/kisspng-pepsi-max-cola-diet-pepsi-fizzy-drinks-pepsi-logo-5acc3df9920a68.9939404015233346495982.png',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
            [
                'name'      =>  'Me-O',
                'thumbnail' =>  'uploads/brands/meo-0-logo.jpeg',
                'created_at' => '2020-10-28 07:11:00',
                'updated_at' => '2020-10-28 07:11:00',
            ],
        ]);
    }
}
