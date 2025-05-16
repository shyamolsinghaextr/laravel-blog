<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'post_catagory',
        'post_content',
        'author',
        'img',
        'status',
        'created_at',
        'updated_at '
    ];
}