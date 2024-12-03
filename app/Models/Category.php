<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Đặt tên bảng cho model này (nếu khác tên bảng mặc định)
    protected $table = 'categories';

    // Các thuộc tính có thể được gán giá trị
    protected $fillable = ['name'];

    // Quan hệ với model Product (1 danh mục có nhiều sản phẩm)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
