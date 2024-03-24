<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentFeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resident_fees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('condo_id');
            $table->foreign('condo_id')->references('id')->on('condominios');
            $table->unsignedBigInteger('resident_id');
            $table->foreign('resident_id')->references('id')->on('users');
            $table->string('bank_receipt')->nullable;
            $table->string('month');
            $table->string('date');
            $table->string('status')->default("Por Validar");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resident_fees');
    }
}
