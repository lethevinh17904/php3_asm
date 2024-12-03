<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Đặt tên bảng cho model này (nếu khác tên bảng mặc định)
    protected $table = 'products';

    // Các thuộc tính có thể được gán giá trị
    protected $fillable = [
        'name', 'image', 'quantity', 'price', 'description', 'category_id', 'status'
    ];

    // Quan hệ với model Category (1 sản phẩm thuộc về 1 danh mục)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
