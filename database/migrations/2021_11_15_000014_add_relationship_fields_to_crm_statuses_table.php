<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCrmStatusesTable extends Migration
{
    public function up()
    {
        Schema::table('crm_statuses', function (Blueprint $table) {
            $table->unsignedBigInteger('file_bilhete_id')->nullable();
            $table->foreign('file_bilhete_id', 'file_bilhete_fk_5343453')->references('id')->on('crm_documents');
        });
    }
}
