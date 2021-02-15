<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 * @package App\Models
 * @property integer id
 * @property integer recipe_id
 * @property integer raw_id
 * @property string value
 * @property string created_at
 * @property string updated_at
 */
class Ingredient extends Model
{
    use HasFactory;

    protected $with = ['recipe'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recipe_id',
        'raw_id',
        'value',
    ];

    public function recipe()
    {
        return $this->hasOne(Recipe::class, 'id');
    }

    public function raw()
    {
        return $this->hasOne(Raw::class, 'id');
    }
}
