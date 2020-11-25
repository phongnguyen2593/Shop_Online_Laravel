<?php

// namespace Database\Seeds;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductTableSeeder::class,
            UsersTableSeeder::class,
            OrderProductTableSeeder::class,
            SalesTableSeeder::class,
            OrdersTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
