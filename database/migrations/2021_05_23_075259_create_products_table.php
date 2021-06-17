<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('title');
            $table->string('condition');
            $table->string('brand');
            $table->tinyInteger('type');
            $table->string('image');
            $table->longText('description');
            $table->tinyInteger('return_policy');
            $table->float('price');
            $table->boolean('best_offer');
            
            $table->string('doll_size')->nullable();
            $table->string('doll_gender')->nullable();
            $table->boolean('modified_item')->default(0);
            $table->boolean('domestic_product')->default(0);
            $table->string('featured_refinements')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('upc')->nullable();
            $table->longText('details')->nullable();
            $table->boolean('draft')->default(0);
            $table->boolean('status')->default(1);
            $table->integer('watchers')->default(0);
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('products');
    }
}
