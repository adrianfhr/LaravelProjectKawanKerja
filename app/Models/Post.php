<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Menentukan kolom yang bisa diisi secara massal
    protected $fillable = [
        'title',
        'body',        // Pastikan kolom ini sesuai dengan nama di database
        'tags',
        'created_by',
        'updated_by',
    ];
}
