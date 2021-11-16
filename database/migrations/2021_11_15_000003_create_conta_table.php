<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContaTable extends Migration
{
    public function up()
    {
        Schema::create('conta', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('db_services');
            $table->string('db_res_user');
            $table->string('db_res_accounts_pass');
            $table->string('db_res_accounts_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
