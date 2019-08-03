<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_ar')->default('');
            $table->string('title_en')->default('');
            $table->longText('content_ar');
            $table->longText('content_en');
            $table->text('meta_tags');
            $table->string('lat_location')->default('');
            $table->string('long_location')->default('');
            $table->longText('extirnal_code');
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
        Schema::dropIfExists('settings');
    }
}
