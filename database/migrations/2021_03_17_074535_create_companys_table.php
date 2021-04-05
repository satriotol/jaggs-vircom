<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            $table->string('phone_number');
            // beranda
            $table->text('description_beranda');
            $table->string('video_profile')->nullable();

            // tentang
            $table->text('description');
            $table->text('apa_kata_mereka');
            $table->text('vision');
            $table->text('mission');

            // sosial media
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();

            $table->string('image_desc')->nullable();
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
        Schema::dropIfExists('companys');
    }
}
