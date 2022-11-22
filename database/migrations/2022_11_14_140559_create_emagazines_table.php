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
        Schema::create('emagazines', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('image')->unique();
            $table->string('url_file');
            $table->unsignedBigInteger('emagazine_category_id');
            $table->enum('is_enabled', ['no', 'yes'])->default('yes');
            $table->timestamps();

            $table->foreign('emagazine_category_id')->references('id')->on('emagazine_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emagazines');
    }
};
