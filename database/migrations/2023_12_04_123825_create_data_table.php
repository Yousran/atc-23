<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('nik')->nullable();
            $table->string('surename')->nullable();
            $table->text('address')->nullable();
            $table->date('birthday')->nullable();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('education_id')->constrained();
            $table->foreignId('job_id')->constrained();
            $table->foreignId('religion_id')->constrained();
            $table->text('photo')->nullable();
            $table->string('add_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('data');
    }
};
