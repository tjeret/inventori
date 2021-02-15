<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * @package App\Models
 * @property integer id
 * @property string code
 * @property string recipe_id
 * @property string description
 * @property string created_at
 * @property string updated_at
 */
class Product extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'code',
    'recipe_id',
    'description',
  ];
}
