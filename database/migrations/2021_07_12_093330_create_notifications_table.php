<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->unsignedBigInteger('from');
            $table->unsignedBigInteger('to');

            $table->foreign('from')->references('id')->on('users')->constrained()->cascadeOnDelete()->nullable();
            $table->foreign('to')->references('id')->on('users')->constrained()->cascadeOnDelete()->nullable();

            $table->longText('message');
            $table->foreignId('product_id')->constrained()->cascadeOnDelete()->nullable();
            $table->boolean('seen')->default(0);
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
        Schema::dropIfExists('notifications');
    }
}
