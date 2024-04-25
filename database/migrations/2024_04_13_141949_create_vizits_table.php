<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVizitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vizits', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address', 50);
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('user_agent');
            $table->string('query_string');
            $table->string('request_uri');
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
        Schema::dropIfExists('vizits');
    }
}
