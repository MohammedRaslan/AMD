<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_shippings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->longText('package_details')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('length')->nullable();
            $table->string('service_usa')->nullable();
            $table->float('price_usa');
            $table->float('price_world_wide')->nullable();
            $table->string('service_world_wide')->nullable();
            $table->boolean('usa')->default(1);
            $table->boolean('world_wide')->default(0);
            $table->float('weight')->nullable();
            $table->string('duration')->nullable();
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
        Schema::dropIfExists('product_shippings');
    }
}
