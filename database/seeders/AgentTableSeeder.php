<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating an animal
        $a = new Agent;
        $a->name = "fourtyseven";
        $a->serial = 47;
        $a->taskforce_id= 1;
        $a->save();

        Agent::factory()->count(10)->create();
    }
}
