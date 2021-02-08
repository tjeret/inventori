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

    protected $fillable = [
        'id_price', 'id_variant', 'name', 'label'
    ];

    public function price()
    {
        return $this->belongsTo(Price::class, 'id_price', 'id');
    }

    public function variant()
    {
        return $this->belongsTo(Variant::class, 'id_varian', 'id');
    }

    public function productstock()
    {
        return $this->hasOne(ProductStock::class,'id')
    }
}
