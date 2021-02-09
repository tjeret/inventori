<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_product
 * @property integer value
 * @property dateTime product_date
 */
class ProductStock extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_product', 'value', 'product_date'
    ];

<<<<<<< HEAD
    // public function product()
    // {
    //     return $this->hasOne(Product::class, 'id');
    // }

    // public function producttrx()
    // {
    //     return $this->belongsTo(ProductTrx::class, 'id_product_stock', 'id');
    // }
=======
    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }

    public function producttrx()
    {
        return $this->belongsTo(ProductTrx::class, 'id_product_stock', 'id');
    }
>>>>>>> main
}
