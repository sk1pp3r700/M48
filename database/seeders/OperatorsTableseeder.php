<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OperatorsTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = new Operator;
        $k->name = "kronos";
        $k->save(); 
        $k->agents()->attach(1);
        $k->agents()->attach(9);
    }
}
