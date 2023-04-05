<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_Product extends Model
{
    use HasFactory;
    protected $table = 'invoice_product';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['invoice_id','product_id','amount'];
    public function Invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
    public function Product()
    {
        return $this->belongsTo(Product::class);
    }
}
