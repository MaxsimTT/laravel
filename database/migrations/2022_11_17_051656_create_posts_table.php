<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                $table->id();
                $table->integer('category_post_id')->unsigned()->default(0);
                $table->string('name', 100)->collation('utf8_general_ci');
                $table->longText('description')->collation('utf8_general_ci');
                $table->string('author', 100)->collation('utf8_general_ci');
                $table->timestamp('created_date');
            });
        }
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
}
