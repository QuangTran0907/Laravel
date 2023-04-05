<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table = 'invoices';
    protected $primaryKey = 'id';
    public $timeStamps = true;
    protected $fillable = ['amount','total','status','delivery_address','sdt'];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
