<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_type
 * @property string name
 * @property integer unit
 */

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['stock', 'user', 'type'];

    protected $fillable = [
        'id_type', 'id_user', 'id_stock', 'name', 'unit'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'id_type');
    }

    public function stock()
    {
        return $this->hasOne(ProductStock::class, 'id_product', 'id');
    }

    public function details()
    {
        return $this->hasMany(RecipeDetails::class, 'id_product', 'id');
    }
}
