<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories_products')->insert([
            'level' => 1,
            'parent_id' => 0,
            'id_path' => 0,
            'status' => 'A',
            'product_count' => 21324,
            'position' => 0,
        ]);
    }
}
