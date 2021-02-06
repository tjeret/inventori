<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string name
 * @property string addres
 * @property string contact
 */

class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'addres', 'contact'
    ];

    public function pricelist()
    {
        return $this->hasOne(PriceList::class, 'id_suplier', 'id');
    }
}
