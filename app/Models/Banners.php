<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','image','link','description','position','start_date','end_date','is_active'
    ];
    protected $primaryKey = 'id';
    protected $table = "banners";
}
