<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{

    protected $with = ['material'];
    /**
     * @property string matrial_id
     * @property integer c_material
     * @property string name
     * @property integer quantity
     * @property integer price
     */
    use HasFactory;

    protected $fillable = [
        'matrial_id', 'name', 'quantity', 'price'
    ];

    public function material()
    {
        return $this->hasOne(MaterialCategorie::class, 'id', 'c_material');
    }
}
