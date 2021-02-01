<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;


    protected $with = ['categories'];
    /**
     * @property string product_id
     * @property integer category_id
     * @property string name
     * @property integer quantity
     * @property integer price
     * @property string qr_code
     * @var array
     */
    protected $fillable = [
        'product_id', 'category_id', 'name', 'quantity', 'price', 'qr_code'
    ];

    public function categories()
    {
        return $this->hasOne(ProductCategory::class, 'category_id', 'id');
    }
}
