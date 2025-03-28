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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên sản phẩm
            $table->text('description')->nullable(); // Mô tả (có thể null)
            $table->decimal('price', 8, 2); // Giá (8 chữ số, 2 số thập phân)
            $table->integer('quantity')->default(0); // Số lượng tồn kho
            $table->string('sku')->unique()->nullable(); // Mã SKU (duy nhất, có thể null)
            $table->boolean('is_active')->default(true); // Trạng thái hoạt động
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
