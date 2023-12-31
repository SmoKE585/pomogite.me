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

        Schema::create('project_domain', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->string('domain');
            $table->boolean('external')->default(false);


            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_domain');
    }
};
