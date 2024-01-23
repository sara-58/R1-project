<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory,SoftDeletes;
        protected $fillable = [
        'carTitle',
        'carImage',
        'luggages',
        'doors',
        'passengers',
        'price',
        'category_id',
        'description',
        'carPublished',
        ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
