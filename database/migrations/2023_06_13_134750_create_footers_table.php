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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('footer_col1_title');
            $table->string('footer_col1_desc');
            $table->string('footer_col2_title');
            $table->string('footer_col2_link');
            $table->string('footer_col3_title');
            $table->string('footer_col3_link');
            $table->string('footer_col4_title');
            $table->string('footer_col4_socialtitle');
            $table->string('footer_col4_sociallink');
            $table->string('copyright');
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
        Schema::dropIfExists('footers');
    }
};
