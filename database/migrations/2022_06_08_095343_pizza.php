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
        Schema::create('pizzas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('base90');   
            $table->string('base90ch');
            $table->string('b2b90');
            $table->string('b2b90ch');
            $table->string('cust90');
            $table->string('cust90ch');

            $table->string('base30');
            $table->string('base30ch');
            $table->string('b2b30');
            $table->string('b2b30ch');
            $table->string('cust30');
            $table->string('cust30ch');
            $table->timestamps();
        });
        Schema::create('margins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('B2B_margin');
            $table->string('customer_margin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
