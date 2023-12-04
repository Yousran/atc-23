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
        Schema::create('table_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->foreignId('table_list_id')->constrained()->onDelete('cascade');
            $table->integer('view')->default('0');
            $table->integer('add')->default('0');
            $table->integer('edit')->default('0');
            $table->integer('import')->default('0');
            $table->integer('soft_delete')->default('0');
            $table->integer('hard_delete')->default('0');
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
        Schema::dropIfExists('table_rules');
    }
};
