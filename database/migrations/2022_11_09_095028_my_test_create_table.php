<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MyTestCreateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('product_category')) {
            Schema::drop('product_category');
        }

        Schema::create('product_category', function (Blueprint $table) {
            $table->id();
            $table->string('category_name');
            $table->string('parent')->unique();
            $table->timestamp('path')->nullable();
            $table->string('root');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_category');
    }
}
