<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSubscriptionsTableAddNewColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropColumn('title');
            $table->dropColumn('description');
            $table->string('type')->after('id');
            $table->string('currency')->nullable()->after('type');
            $table->float('annual')->nullable()->after('currency');
            $table->float('monthly')->nullable()->after('annual');
            $table->integer('product_quantity')->after('monthly');
            $table->float('rate_one_percentage')->default(0)->after('product_quantity');
            $table->integer('rate_one_quantity')->default(0)->after('rate_one_percentage');
            $table->float('rate_two_percentage')->default(0)->after('rate_one_quantity');
            $table->integer('rate_two_quantity')->default(0)->after('rate_two_percentage');
            $table->float('rate_three_percentage')->default(0)->after('rate_two_quantity');
            $table->integer('rate_three_quantity')->default(0)->after('rate_three_percentage');
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
}
