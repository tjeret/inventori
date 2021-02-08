<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string name
 * @property string contact
 * @property string address
 */

class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'contact', 'addres'
    ];

    public function purcasing()
    {
        return $this->hasOne(Purcasing::class, 'id_supplier', 'id');
    }
}
