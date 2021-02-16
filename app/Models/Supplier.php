<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 * @package App\Models
 * @property integer id
 * @property string owner
 * @property string name
 * @property string address
 * @property string phone
 */
class Supplier extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner',
        'name',
        'address',
        'email',
        'phone',
    ];
}
