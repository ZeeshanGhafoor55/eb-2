<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->text('hero_desc');
            $table->string('hero_btn_text');
            $table->string('hero_btn_link');
            $table->text('hero_img');
            $table->text('hero_bg_img');
            $table->string('greencard_title');
            $table->text('greencard_desc');
            $table->string('greencard_btntext');
            $table->string('greencard_btnlink');
            $table->string('apply_title');
            $table->text('apply_desc');
            $table->string('apply_btntext');
            $table->string('apply_btnlink');
            $table->string('apply1_number');
            $table->string('apply1_subtitle');
            $table->string('apply1_subdesc');
            $table->string('apply2_number');
            $table->string('apply2_subtitle');
            $table->string('apply2_subdesc');
            $table->string('apply3_number');
            $table->string('apply3_subtitle');
            $table->string('apply3_subdesc');
            $table->string('sponsoring_title');
            $table->text('sponsoring_desc');
            $table->string('latestnews_title');
            $table->text('latestnews_desc');
            $table->string('latestnews_btntext');
            $table->string('latestnews_btnlink');
            $table->string('faq_title');
            $table->text('faq_desc');
            $table->string('meta_title');
            $table->text('meta_desc');
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
        Schema::dropIfExists('homes');
    }
};
