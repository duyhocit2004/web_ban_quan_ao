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
        Schema::create('contact_account', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',255);
            $table->unsignedBigInteger('user_id');
            $table->string('phone',255);
            $table->string('topic',255);
            $table->string('message',255);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_account');
    }
};
