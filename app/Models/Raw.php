<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Raw
 * @package App\Models
 * @property integer id
 * @property integer raw_type_id
 * @property string name
 * @property string created_at
 * @property string updated_at
 */
class Raw extends Model
{
    use HasFactory;

    protected $with = ['rawstock'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'raw_type_id',
        'name',
    ];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class, 'raw_id', 'id');
    }

    public function rawstock()
    {
        return $this->belongsTo(RawStock::class, 'id', 'raw_id');
    }
}
