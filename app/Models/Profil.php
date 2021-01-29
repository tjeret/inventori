<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * @property integer user_id
 * @property string name
 * @property lineString img
 * @property string phone
 */

class Profil extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'img', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
