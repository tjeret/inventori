<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string name
 * @property integer unit
 */

class Material extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['stock'];

    protected $fillable = [
        'name', 'unit'
    ];

    public function stock()
    {
        return $this->hasOne(Stock::class, 'id_material', 'id');
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'id_material', 'id');
    }
}
