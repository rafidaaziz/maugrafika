<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    use HasFactory;
    protected $fillable = [
        'portofolio_nama',
        'portofolio_image'
    ];
}
