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

        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->bigInteger('theme_id');
            $table->foreign('theme_id')->references('id')->on('themes');
            $table->string('title');
            $table->longText('text');
            $table->bigInteger('status');
            $table->foreign('status')->references('id')->on('statuses');
            $table->dateTime('expire');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};
