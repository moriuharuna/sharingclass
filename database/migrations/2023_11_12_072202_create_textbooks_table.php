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
        Schema::create('textbooks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('condition');
            $table->integer('price');
            $table->integer('exchange');
            $table->text('supplementaly_information')->nullable();
            $table->foreignId('post_id')->constrained();
            $table->foreignId('department_id')->constrained();
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
        Schema::dropIfExists('textbooks');
    }
};
