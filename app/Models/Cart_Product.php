<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    use HasFactory;
    protected $table = 'cart_product';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['cart_id','product_id','amount','status'];
    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
