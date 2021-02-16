<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RawTransaction
 * @package App\Models
 * @property integer id
 * @property integer supplier_id
 * @property integer price
 * @property string invoice
 * @property string created_at
 * @property string updated_at
 */
class RawTransaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'supplier_id',
        'price',
        'invoice',
    ];

    public function rawstock()
    {
        return $this->hasOne(RawStock::class, 'id');
    }
}
