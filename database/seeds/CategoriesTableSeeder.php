<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str; 

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Thực phẩm',
                'slug' => Str::random(10),
                'depth' => 1,
                'updated_at' => '2020-10-28 07:11:22'
            ],
            [
                'name' => 'Gia vị',
                'slug' => Str::random(10),
                'depth' => 1,
                'updated_at' => '2020-10-28 03:11:22'
            ],
            [
                'name' => 'Bánh kẹo',
                'slug' => Str::random(10),
                'depth' => 1,
                'updated_at' => '2020-10-28 07:21:22'
            ],
            [
                'name' => 'Thực phẩm bổ dưỡng',
                'slug' => Str::random(10),
                'depth' => 1,
                'updated_at' => '2020-10-28 10:11:22'
            ],
            [
                'name' => 'Đồ uống - Giải khát',
                'slug' => Str::random(10),
                'depth' => 1,
                'updated_at' => '2020-10-28 10:11:22'

            ],
            [
                'name' => 'Đồ uống có gas',
                'slug' => Str::random(10),
                'depth' => 2,
                'updated_at' => '2020-10-28 22:11:22'
            ],
            [
                'name' => 'Đồ uống không gas',
                'slug' => Str::random(10),
                'depth' => 2,
                'updated_at' => '2020-10-28 13:11:22'
            ],
            [
                'name' => 'Đồ uống pha chế',
                'slug' => Str::random(10),
                'depth' => 2,
                'updated_at' => '2020-10-28 07:11:22'
            ],
            [
                'name' => 'Bia rượu',
                'slug' => Str::random(10),
                'depth' => 2,
                'updated_at' => '2020-10-28 18:11:22'
            ],
        ]);
    }
}
