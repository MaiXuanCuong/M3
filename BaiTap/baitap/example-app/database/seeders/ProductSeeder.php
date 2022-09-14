<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Sach Van 10',
            'price' => 20000,
            'description' => 'mo ta san pham',
            'category_id' => 1
        ];
        DB::table('products')->insert($data);
    }
}
