<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RawStock
 * @package App\Models
 * @property integer raw_id
 * @property integer raw_transaction_id
 * @property double debit
 * @property double credit
 * @property string expired_at
 * @property string created_at
 * @property string updated_at
 */
class RawStock extends Model
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
        'raw_id',
        'raw_transaction_id',
        'debit',
        'credit',
        'expired_at',
    ];

    public function raw()
    {
        return $this->hasOne(Raw::class, 'id');
    }

    public function rawtransaction()
    {
        return $this->hasOne(RawTransaction::class, 'id');
    }
}
