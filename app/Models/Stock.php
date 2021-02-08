<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property integer id_purcasing
 * @property integer id_material
 * @property dateTime expired_date
 */

class Stock extends Model
{
    use HasFactory, SoftDeletes;

    protected $with = ['purcasing', 'material'];

    protected $fillable = [
        'id_purcasing', 'id_material', 'expired_date'
    ];

    public function purcasing()
    {
        return $this->belongsTo(Purcasing::class, 'id');
    }

    public function material()
    {
        return $this->belongsTo(Material::class, 'id');
    }
}
