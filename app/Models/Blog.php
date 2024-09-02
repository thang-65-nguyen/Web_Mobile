<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','image','content','is_active','author','is_featured','is_promotion'
    ];
    protected $primaryKey = 'id';
    protected $table = "blog";
}
