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
        Schema::create('attendants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('data_id')->constrained('data')->onDelete('cascade');
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade');
            $table->foreignId('group_id')->constrained('groups')->onDelete('cascade');

            $table->bigInteger('nik')->nullable();
            $table->string('surename')->nullable();
            $table->text('address')->nullable();
            $table->text('bio')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('gender_id')->nullable();
            $table->integer('education_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('religion_id')->nullable();
            $table->text('photo')->nullable();

            $table->boolean('status')->default('0');
            $table->integer('payment')->default('0');
            $table->integer('payment_stat_id')->nullable();
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
        Schema::dropIfExists('attendants');
    }
};
