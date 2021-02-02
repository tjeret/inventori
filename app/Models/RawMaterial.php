<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    /**
     * @property string matrial_id
     * @property string name
     * @property integer quantity
     */
    use HasFactory;

    protected $fillable = [
        'matrial_id', 'name', 'quantity'
    ];
}
