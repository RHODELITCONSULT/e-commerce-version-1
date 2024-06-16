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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("email");
            $table->string("subject");
            $table->longText("message_text");
            $table->boolean("reply_status")->default(0);
            $table->datetime("replied_at")->nullable();
            $table->longText("reply_text")->nullable();
            $table->datetime("read_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
