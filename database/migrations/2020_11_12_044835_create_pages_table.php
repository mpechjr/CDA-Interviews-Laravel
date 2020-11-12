<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image')->nullable();
            $table->text('content');
            $table->string('meta_title_1');
            $table->string('meta_description_1');
            $table->string('meta_title_2');
            $table->string('meta_description_2');
            $table->text('ga')->nullable();
            $table->text('fbpixel')->nullable();
            $table->boolean('no_index_1')->default(1);
            $table->boolean('no_index_2')->default(1);
            $table->string('email_1');
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
        Schema::dropIfExists('pages');
    }
}
