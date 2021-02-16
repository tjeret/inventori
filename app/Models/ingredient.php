<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_recipt
 * @property integer id_material
 * @property integer value
 */
class ingredient extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id_recipt', 'id_material', 'value'
    ];

    public function material()
    {
        return $this->hasOne(Material::class, 'id');
    }
}
