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
        Schema::create('account', function (Blueprint $table) {
            $table->id('id');
            $table->string('username',255);
            $table->string('phone',255)->nullable();
            $table->text('image')->nullable();
            $table->timestamp('date_of_birth')->nullable();
            $table->string('address',255)->nullable();
            $table->string('email',255);
            $table->string('password',255);
            $table->unsignedBigInteger('role_id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
