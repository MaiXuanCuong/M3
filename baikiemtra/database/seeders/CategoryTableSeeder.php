<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permission = new Category();
        $permission->name = 'Truyện Cười';
        $permission->save();
        
        $permission = new Category();
        $permission->name = 'Viên Tưởng';
        $permission->save();

        $permission = new Category();
        $permission->name = 'Chiến Tranh';
        $permission->save();

        $permission = new Category();
        $permission->name = 'Sách Giáo Khoa';
        $permission->save();

        $permission = new Category();
        $permission->name = 'Sách Tham Khảo';
        $permission->save();
    }
}
