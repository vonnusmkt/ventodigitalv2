<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContaTable extends Migration
{
    public function up()
    {
        Schema::table('conta', function (Blueprint $table) {
            $table->unsignedBigInteger('db_res_accounts_emails_id')->nullable();
            $table->foreign('db_res_accounts_emails_id', 'db_res_accounts_emails_fk_5343746')->references('id')->on('emails');
        });
    }
}
