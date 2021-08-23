<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDBTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('db_translations', function (Blueprint $table) {
            $table->id();
            $table->string('key')->comment('Dot separated key of the phrase or a phrase itself');
            $table->string('locale', 16)->comment('Language code according to ISO');
            $table->text('value')->nullable()->comment('Translated text for chosen locale');
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
        Schema::dropIfExists('db_translations');
    }
}
