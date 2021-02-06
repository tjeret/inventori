<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string code
 * @property integer id_product
 * @property integer price_sell
 * @property integer price_buy
 */

class PriceList extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['product', 'supplier'];

    protected $fillable = [
        'code', 'id_suplier', 'id_product', 'price_sell', 'price_buy'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
}
