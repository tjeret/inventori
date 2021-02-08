<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *@property integer id_product
 *@property string name
 */

class Recipt extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['ingredients'];
    protected $filable = [
        'id_product', 'name'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }

    public function ingredients()
    {
        return $this->belongsTo(Ingredient::class, 'id_recipt', 'id');
    }
}
