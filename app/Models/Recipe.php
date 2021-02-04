<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string name
 */
class Recipe extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function details()
    {
        return $this->hasOne(RecipeDetails::class, 'id_recipe', 'id');
    }
}
