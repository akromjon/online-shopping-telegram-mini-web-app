<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create(table: 'products', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'slug')->unique();
            $table->text(column: 'description');
            $table->unsignedBigInteger(column: 'quantity')->default(value: 0);
            $table->float(column: 'price', precision: 8);
            $table->json(column: 'available_sizes');
            $table->string(column: 'color')->nullable();
            $table->unsignedBigInteger(column: 'category_id');
            $table->unsignedBigInteger(column: 'discount')->default(value: 0);
            $table->enum(column: 'status', allowed: ['active', 'inactive', 'sold_out', 'discount'])->default(value: 'active');
            $table->foreign(columns: 'category_id')->references(columns: 'id')->on(table: 'categories')->onDelete(action: 'cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
