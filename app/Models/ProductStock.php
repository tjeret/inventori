<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_product
 * @property integer id_price_list
 * @property integer debit
 * @property integer credit
 */
class ProductStock extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_product', 'id_price_list', 'debit', 'credit'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }

    public function price_list()
    {
        return $this->hasMany(PriceList::class, 'id_price_list');
    }

    public function details()
    {
        return $this->hasMany(RecipeDetails::class, 'id_product', 'id');
    }
}
