<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Truyen extends Model
{
    use HasFactory;
    protected $table = 'truyen'; 
    // Các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'name',
        'author',
        'status',
        'view',
        'like',
        'follow',
        'slug',
        'hot',
        'outstanding',
        'description',
        'img',
    ];

    // Các thuộc tính được chuyển đổi sang kiểu dữ liệu cụ thể
    protected $casts = [
        'status' => 'boolean',
        'hot' => 'boolean',
        'outstanding' => 'boolean',
    ];


    // Định nghĩa thuộc tính ảo để kiểm tra xem truyện có phổ biến không
    public function getPopularAttribute()
    {
        return $this->view > 1000; // Ví dụ, đánh dấu truyện là phổ biến nếu số lượt xem lớn hơn 1000
    }
}
