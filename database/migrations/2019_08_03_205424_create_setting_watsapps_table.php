<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingWatsappsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_watsapps', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('setting_id');
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
            $table->string('whatsapp')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('setting_watsapps');
    }
}
