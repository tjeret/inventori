<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductPrice
 * @package App\Models
 * @property integer product_id
 * @property integer role_id
 * @property double discount
 * @property string created_at
 * @property string updated_at
 */
class ProductPrice extends Model
{
  use HasFactory;

  protected $primaryKey = "created_at";
  protected $keyType = "string";

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'product_id',
    'role_id',
    'discount',
  ];
}
