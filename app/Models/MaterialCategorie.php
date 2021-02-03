<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialCategorie extends Model
{

    /**
     * @property string name
     */
    use HasFactory;

    protected $fillable = ['name'];

    public function material()
    {
        return $this->belongsTo(RawMaterial::class, 'c_material');
    }
}
