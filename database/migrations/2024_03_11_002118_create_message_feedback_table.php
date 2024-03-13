<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resident_id');
            $table->foreign('resident_id')->references('id')->on('users');
            $table->unsignedBigInteger('condo_id');
            $table->foreign('condo_id')->references('id')->on('condominios');
            $table->string('feedback');
            $table->time('time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('status')->default('Não Respondido');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_feedback');
    }
}
