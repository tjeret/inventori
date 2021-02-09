<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_price
 * @property integer id_variant
 * @property string name
 * @property integer label
 */

class Product extends Model
{
    use HasFactory, SoftDeletes;

<<<<<<< HEAD
    protected $with = [
        'price',
        'variant',
        'productstock'
    ];
=======
>>>>>>> main
    protected $fillable = [
        'id_price', 'id_variant', 'name', 'label'
    ];

    public function price()
    {
        return $this->belongsTo(Price::class, 'id_price', 'id');
    }

    public function variant()
    {
<<<<<<< HEAD
        return $this->belongsTo(Variant::class, 'id_variant', 'id');
=======
        return $this->belongsTo(Variant::class, 'id_varian', 'id');
>>>>>>> main
    }

    public function productstock()
    {
<<<<<<< HEAD
        return $this->hasOne(ProductStock::class, 'id');
=======
        return $this->hasOne(ProductStock::class,'id')
>>>>>>> main
    }
}
