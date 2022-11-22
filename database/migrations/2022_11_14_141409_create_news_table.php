<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('title');
            $table->string('image')->unique();
            $table->text('information');
            $table->unsignedBigInteger('news_category_id');
            $table->enum('is_enabled', ['no', 'yes'])->default('yes');
            $table->timestamps();

            $table->foreign('news_category_id')->references('id')->on('news_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
