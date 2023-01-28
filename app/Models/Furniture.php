<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'obj_file',
    ];

    public function furniture_color() : HasOne {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

}
