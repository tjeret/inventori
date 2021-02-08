<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_supplier
 * @property integer price
 * @property string purcase_invoice
 * @property dateTime purcase_date
 */
class Purcasing extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['supplier'];

    protected $fillable = [
        'id_supplier', 'price', 'purcase_invoice', 'purcase_date'
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_stock', 'id');
    }
}
