<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size_Product extends Model
{
    use HasFactory;
    protected $table = 'size_product';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['size_id','product_id','amount'];
    public function Size()
    {
        return $this->belongsTo(Size::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
