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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); 
            $table->string('username')->unique(); 
            $table->string('email')->unique(); 
            $table->string('password_hash'); 
            $table->string('full_name')->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); 
            $table->date('date_of_birth')->nullable(); 
            $table->string('avatar_url')->nullable(); 
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrentOnUpdate(); 
            $table->timestamp('last_login')->nullable(); 
            $table->enum('status', ['active', 'inactive', 'banned'])->default('active'); 
            $table->integer('coin_earned');
            $table->foreignId('payment_id')->constrained('payments')->onDelete('cascade');
            $table->foreignId('subscription_id')->constrained('subscriptions')->onDelete('cascade');
            $table->foreignId('pomotion_id')->constrained('pomotions')->onDelete('cascade');
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
