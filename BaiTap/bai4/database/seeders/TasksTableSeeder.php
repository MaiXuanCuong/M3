<?php

namespace Database\Seeders;
use App\Models\Task;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Str;
class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<10 ; $i++){
               $task = new Task();
        $task->title = Str::random(10);
        $task->content = Str::random(10);
        $task->due_date = Carbon::today()->subDays(rand(0,730));
        $task->image  = "";
        $task->save();
        }
     
    }
}
