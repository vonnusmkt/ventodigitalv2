<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('db_res_email_provider');
            $table->string('db_res_email')->unique();
            $table->string('db_res_email_pass');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
