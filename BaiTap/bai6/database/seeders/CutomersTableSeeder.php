<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CutomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = 1;
        $customer->name = "customer 1";
        $customer->dob = "2018-09-26";
        $customer->email = "customer1@codegym.vn";
        $customer->city_id = 1;
        $customer->save();
    
        $customer = new Customer();
        $customer->id = 2;
        $customer->name = "customer 2";
        $customer->dob = "2018-09-26";
        $customer->email = "customer2@codegym.vn";
        $customer->city_id = 1;
        $customer->save();
        
        $customer = new Customer();
        $customer->id = 3;
        $customer->name = "customer 3";
        $customer->dob = "2018-09-26";
        $customer->email = "customer3@codegym.vn";
        $customer->city_id = 2;
        $customer->save();
    }
}
