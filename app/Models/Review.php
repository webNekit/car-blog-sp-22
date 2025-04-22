<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Указываем прямую связь с таблицей
    protected $table = "reviews";
    // Указываем какие поля запрещены для редактирования
    protected $guarded = [];
    // Указываем строгую типизацию
    protected $casts = [
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];
}
