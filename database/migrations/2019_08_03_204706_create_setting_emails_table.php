<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_emails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->nullable();
            $table->string('department')->nullable();
            $table->unsignedInteger('setting_id');
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');
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
        Schema::dropIfExists('setting_emails');
    }
}
