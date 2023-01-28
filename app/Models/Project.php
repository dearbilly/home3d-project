<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'furniture_id',
        'furniture_color_id',
        'furniture_palette_id',
        'furniture_pattern_id',
        'furniture_pattern_color_id',
        'furniture_pattern_palette_id',
    ];
}
