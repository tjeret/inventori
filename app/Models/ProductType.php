<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 */
class ProductType extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function product()
    {
        return $this->hasOne(Product::class, 'id_type', 'id');
    }
}
