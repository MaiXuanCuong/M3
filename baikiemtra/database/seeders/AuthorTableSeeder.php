<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = new Author();
        $permission->name = 'Nguyễn Đức Tân';
        $permission->save();
        
        $permission = new Author();
        $permission->name = 'Mai Xuân Thảo';
        $permission->save();

        $permission = new Author();
        $permission->name = 'Phan Ngọc Cường';
        $permission->save();

        $permission = new Author();
        $permission->name = 'Hoàng Thanh Hải';
        $permission->save();

        $permission = new Author();
        $permission->name = 'Nguyễn Văn Thuần';
        $permission->save();

        $permission = new Author();
        $permission->name = 'Mai Xuân Cường';
        $permission->save();
    }
}
