<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftLesson extends Model
{
    use HasFactory;
    protected $table = 'gift_lessons';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
    ];
}
