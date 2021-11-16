<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmStatusesTable extends Migration
{
    public function up()
    {
        Schema::create('crm_statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('data')->nullable();
            $table->string('reserva')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
            $table->string('companhia')->nullable();
            $table->string('origem')->nullable();
            $table->string('destino')->nullable();
            $table->string('cc')->nullable();
            $table->decimal('valor', 15, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
