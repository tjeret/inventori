<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipe
 * @package App\Models
 * @property integer id
 * @property string name
 * @property string created_at
 * @property string updated_at
 */
class Recipe extends Model
{
    use HasFactory;

    protected $with = ['ingredient'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'recipe_id', 'id');
    }
}
