<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_product_stock
 * @property integer credit
 * @property integer debit
 */
class ProductTrx extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_product_stock', 'debit', 'credit'
    ];

    public function productStock()
    {
        return $this->hasOne(ProductStock::class, 'id');
    }
}
