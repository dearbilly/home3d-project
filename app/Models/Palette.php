<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Palette extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_name',
        'color_id',
    ];

//    public function palette(): BelongsTo
//    {
//        return $this->belongsTo(Color::class, 'color_id', 'id');
//    }
}
