<?php

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
        DB::table('products')->insert([
            'product_name' => 'Ice cream',
            'quantity' => 5,
            'price' => 10,
            'created_at' => date("Y-m-d H:i:s")
        ]);
    }
}
