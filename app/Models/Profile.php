<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Profile
 * @package App\Models
 * @property integer user_id
 * @property string address
 * @property string phone
 * @property string created_at
 * @property string updated_at
 */
class Profile extends Model
{
  use HasFactory;

  protected $primaryKey = "user_id";
  protected $keyType = "integer";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'user_id',
    'address',
    'phone',
  ];
}
