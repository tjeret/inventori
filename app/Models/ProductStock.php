<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductStock
 * @package App\Models
 * @property integer product_id
 * @property integer debit
 * @property integer credit
 * @property string expired_at
 * @property string created_at
 * @property string updated_at
 */
class ProductStock extends Model
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
        'debit',
        'credit',
        'expired_at',
    ];
}
