<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_product
 * @property integer id_stock
 * @property integer id_type
 * @property integer id_recipe
 */

class RecipeDetails extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['stock', 'recipe', 'type'];

    protected $fillable = [
        'id_product', 'id_stock', 'id_type', 'id_recipe', 'description'
    ];

    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'id_recipe', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }

    public function stock()
    {
        return $this->belongsTo(ProductStock::class, 'id_stock', 'id');
    }

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'id_type', 'id');
    }
}
