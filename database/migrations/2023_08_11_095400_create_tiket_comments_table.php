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

        Schema::create('tiket_comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tiket_id');
            $table->foreign('tiket_id')->references('id')->on('tikets');
            $table->bigInteger('owner_id');
            $table->foreign('owner_id')->references('id')->on('users');
            $table->text('message');

            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiket_comments');
    }
};
