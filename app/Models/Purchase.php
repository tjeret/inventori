<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    /**
     * @property integer suplier_id
     * @property integer category_id
     * @property integer product_id
     * @property integer bill
     * @property integer price
     * @property dateTime purchase_date
     * @property dateTime expired_date
     */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'suplier_id',
        'category_id',
        'product_id',
        'bill',
        'price',
        'expired_date',
        'purchase_date'
    ];
}
