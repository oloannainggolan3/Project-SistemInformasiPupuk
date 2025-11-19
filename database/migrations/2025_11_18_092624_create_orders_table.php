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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique(); // ORD-YYYY-XXX
            $table->unsignedBigInteger('user_id');
            $table->string('village_office')->nullable();
            $table->json('items'); // Array of {name, qty, price}
            $table->decimal('total_amount', 15, 2)->default(0);
            $table->enum('status', ['Pending', 'Processing', 'Ready', 'Completed', 'Rejected'])->default('Pending');
            $table->boolean('confirmed_by_user')->default(false);
            $table->text('rejection_reason')->nullable();
            $table->timestamps();
            
            // Foreign key
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Indexes
            $table->index('status');
            $table->index('confirmed_by_user');
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
