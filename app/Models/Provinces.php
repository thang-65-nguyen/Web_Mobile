<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','is_active'
    ];
    protected $primaryKey = 'id';
    protected $table = "provinces";
}
