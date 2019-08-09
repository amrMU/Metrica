<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingMailProviderInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_mail_provider_infos', function (Blueprint $table) {
            //defualt mail info by cpanel
            $table->increments('id');
            $table->unsignedInteger('setting_id');
            $table->foreign('setting_id')->references('id')->on('settings')->onDelete('cascade');            
            $table->string('MAIL_DRIVER')->default('SMTP');
            $table->string('MAIL_HOST')->default('mail.amr.rmal.com.sa');
            $table->string('MAIL_port')->default('587');
            $table->string('MAIL_USERNAME')->default('development@amr.rmal.com.sa');
            $table->string('MAIL_PASSWORD')->default(';Rvc?uyCR!NH');
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
        Schema::dropIfExists('setting_mail_provider_infos');
    }
}
