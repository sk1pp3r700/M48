<?php

namespace Database\Seeders;

use App\Models\Taskforce;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskforceTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              //creating a taskforce
        $e = new Taskforce;
        $e->name = "bad guys";
        $e->save();
    }
}
