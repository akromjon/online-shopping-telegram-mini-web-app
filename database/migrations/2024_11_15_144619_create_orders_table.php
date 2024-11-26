<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     * migration here we write 
     */
    public function up(): void
    {
        Schema::create(table: 'orders', callback: function (Blueprint $table): void {
            $table->id();

            $table->unsignedBigInteger(column: 'product_id');
            $table->string(column: 'product_name');


            $table->unsignedBigInteger(column: 'telegram_user_id');
            $table->float(column: 'total_price', precision: 8);
            $table->float(column: 'total_discount', precision: 8)->default(value: 0);
            $table->unsignedBigInteger(column: 'quantity')->default(value: 1);
            $table->string(column: 'color')->nullable();
            $table->unsignedInteger(column: 'size');
            $table->string(column: 'delivery_location')->nullable();
            $table->dateTime(column: 'delivery_date')->nullable();
            $table->string(column: 'client_phone_number')->nullable();
            $table->string(column: 'client_name')->nullable();
            $table->unsignedBigInteger(column: 'telegram_user_address_id');
            $table->string(column: 'address')->nullable();
            $table->enum(column: 'status', allowed: [
                'pending',
                'processing',
                'shipping',
                'deliveried',
                'cancelled',
            ]);


            $table->enum(column: 'payment_method', allowed: [
                'cash',
                'uzcard',
                'humocard',
                'uknown',
            ]);


            $table->enum(column: 'payment_status', allowed: [
                'pending',
                'paid',
                'unpaid',
                'failed',
            ]);

            $table->string('order_cancelled_reason')->nullable();
            $table->string('payment_failed_reason')->nullable();

            $table->timestamps();
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
