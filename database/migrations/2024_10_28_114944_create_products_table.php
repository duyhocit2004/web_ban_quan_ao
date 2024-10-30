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
            $table->bigIncrements('id');               // Khóa chính tự động tăng
            $table->string('name', 255);               // Tên sản phẩm
            $table->unsignedBigInteger('color_id');    // Khóa ngoại cho màu
            $table->unsignedBigInteger('size_id');     // Khóa ngoại cho kích thước
            $table->unsignedBigInteger('category_id');  // Khóa ngoại cho danh mục
            $table->string('title', 255);               // Tiêu đề sản phẩm
            $table->text('image');                      // Đường dẫn hình ảnh
            $table->string('quantity', 255);            // Số lượng
            $table->string('code_products', 255);       // Mã sản phẩm
            $table->string('availability', 255);        // Tình trạng hàng hóa
            $table->string('material', 255);            // Chất liệu sản phẩm
            $table->softDeletes();                       // Thêm cột deleted_at cho soft deletes
            $table->timestamps();                        // Tạo created_at và updated_at
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
