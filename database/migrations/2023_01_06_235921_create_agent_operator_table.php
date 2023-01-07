<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_operator', function (Blueprint $table) {
            $table->primary('agent_id','operator_id');
            $table->bigInteger('agent_id')->unsigned();
            $table->bigInteger('operator_id')->unsigned();
            $table->timestamps();


            $table->foreign('agent_id')->references('id')->on('agents')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('operator_id')->references('id')->on('operators')
            ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_operator');
    }
};
