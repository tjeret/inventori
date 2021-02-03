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

    protected $fillable = [
        'code', 'id_product', 'price_sell', 'price_buy'
    ];

    public function product()
    {
        return $this->belongsTo(ProductStock::class, 'id_price_list', 'id');
    }
}
