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
                'name'          => 'Thực phẩm',
                'slug'          => 'thuc-pham',
                'thumbnail'     => 'category_thumbnail/thuc-pham.png',
                'parent_id'     => 0,
                'depth'         => 1,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 07:11:22',
            ],
            [
                'name'          => 'Gia vị',
                'slug'          => 'gia-vi',
                'thumbnail'     => 'category_thumbnail/gia-vi.png',
                'parent_id'     => 0,
                'depth'         => 1,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 03:11:22',
            ],
            [
                'name'          => 'Bánh kẹo',
                'slug'          => 'banh-keo',
                'thumbnail'     => 'category_thumbnail/banh-keo.png',
                'parent_id'     => 0,
                'depth'         => 1,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 07:21:22',
            ],
            [
                'name'          => 'Thực phẩm bổ dưỡng',
                'slug'          => 'thuc-pham-bo-duong',
                'thumbnail'     => 'category_thumbnail/thuc-pham-bo-duong.png',
                'parent_id'     => 1,
                'depth'         => 2,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 10:11:22',
            ],
            [
                'name'          => 'Đồ uống - Giải khát',
                'slug'          => 'do-uong-giai-khat',
                'thumbnail'     => 'category_thumbnail/do-uong-giai-khat.png',
                'parent_id'     => 0,
                'depth'         => 1,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 10:11:22',

            ],
            [
                'name'          => 'Đồ uống có gas',
                'slug'          => 'do-uong-co-gas',
                'thumbnail'     => 'category_thumbnail/do-uong-co-gas.png',
                'parent_id'     => 5,
                'depth'         => 2,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 22:11:22',
            ],
            [
                'name'          => 'Đồ uống không gas',
                'slug'          => 'do-uong-khong-gas',
                'thumbnail'     => 'category_thumbnail/do-uong-khong-gas.png',
                'parent_id'     => 5,
                'depth'         => 2,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 13:11:22',
            ],
            [
                'name'          => 'Đồ uống pha chế',
                'slug'          => 'do-uong-pha-che',
                'thumbnail'     => 'category_thumbnail/do-uong-pha-che.png',
                'parent_id'     => 5,
                'depth'         => 2,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 07:11:22',
            ],
            [
                'name'          => 'Bia rượu',
                'slug'          => 'bia-ruou',
                'thumbnail'     => 'category_thumbnail/bia-ruou.png',
                'parent_id'     => 5,
                'depth'         => 2,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 18:11:22',
            ],
            [
                'name'          => 'Chăm sóc thú cưng',
                'slug'          => 'cham-soc-thu-cung',
                'thumbnail'     => 'category_thumbnail/cham-soc-thu-cung.png',
                'parent_id'     => 0,
                'depth'         => 1,
                'created_at'    => '2020-10-28 07:11:22',
                'updated_at'    => '2020-10-28 18:11:22',
            ],
        ]);
    }
}
