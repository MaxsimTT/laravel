<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CategoriesProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('categories_products')) {
            Schema::drop('categories_products');
        }

        Schema::create('categories_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedMediumInteger('parent_id');
            $table->string('id_path');
            $table->unsignedInteger('level');
            $table->char('status');
            $table->unsignedMediumInteger('product_count');
            $table->unsignedSmallInteger('position');
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
}
