<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string type
 * @property string name
 * @property string description
 * @property integer enable
 */
class Variant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type', 'name', 'description', 'enable'
    ];

    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }
}
