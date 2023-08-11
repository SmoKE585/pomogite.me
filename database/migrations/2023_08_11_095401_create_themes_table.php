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

        Schema::create('themes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('title');
            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->bigInteger('autoassign_to')->nullable();
            $table->foreign('autoassign_to')->references('id')->on('users');
            $table->integer('worktime')->default(3600);

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
