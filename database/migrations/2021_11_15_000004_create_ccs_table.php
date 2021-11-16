<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCcsTable extends Migration
{
    public function up()
    {
        Schema::create('ccs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('db_cc')->unique();
            $table->string('db_exp');
            $table->string('db_cvv');
            $table->string('db_band');
            $table->string('db_tipo')->nullable();
            $table->string('db_bank')->nullable();
            $table->string('db_tested')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
