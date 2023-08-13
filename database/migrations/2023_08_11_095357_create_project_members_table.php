<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('project_members', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->boolean('owner')->default(false);
            $table->integer('total');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_members');
    }
};
