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
        Schema::create('dotgix_messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('conversations_id'); // Use unsignedBigInteger to match the 'id' of conversations
            $table->foreign('conversations_id')->references('id')->on('dotgix_conversations')->cascadeOnDelete();

            $table->unsignedBigInteger('sender_id')->nullable(); // Ensure this matches the 'id' of users table
            $table->foreign('sender_id')->references('id')->on('users')->nullOnDelete();

            $table->unsignedBigInteger('receiver_id')->nullable(); // Ensure this matches the 'id' of users table
            $table->foreign('receiver_id')->references('id')->on('users')->nullOnDelete();

            $table->timestamp('read_at')->nullable();
            // Delete actions 
            $table->timestamp('receiver_deleted_at')->nullable();
            $table->timestamp('sender_deleted_at')->nullable();

            $table->text('body')->nullable();
            $table->string('type')->default('text');
            $table->string('file_path')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dotgix_messages');
    }
};
