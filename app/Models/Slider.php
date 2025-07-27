<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'sub_heading',
        'paragraph',
        'button_text',
        'animation_link'
    ];
}
