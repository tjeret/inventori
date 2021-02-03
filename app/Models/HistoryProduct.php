<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_product
 * @property integer id_price_list
 * @property integer quantity
 * @property integer total
 */

class HistoryProduct extends Model
{

    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_product', 'id_price_list', 'quantity', 'total'
    ];
}
