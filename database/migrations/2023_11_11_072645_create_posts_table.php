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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('class_name');
            $table->string('teacher');
            $table->integer('term');
            $table->integer('method');
            $table->string('evaluation');
            $table->string('fulfillment');
            $table->string('obtaining_unit_ease');
            $table->integer('textbook_presence');
            $table->text('supplementaly_information');
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
        Schema::dropIfExists('posts');
    }
};
