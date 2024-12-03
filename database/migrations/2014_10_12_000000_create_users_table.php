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
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('fullname');
            $table->string('username')->unique();  // Tên tài khoản
            $table->string('avatar')->nullable();  // Ảnh đại diện (optional)
            $table->enum('role', ['admin', 'user'])->default('user');  // Phân quyền (admin/user)
            $table->boolean('active')->default(true);  // Trạng thái tài khoản (kích hoạt hoặc vô hiệu hóa)

            $table->rememberToken();  // Token để nhớ đăng nhập
            $table->timestamps();  // Thời gian tạo và cập nhật
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
