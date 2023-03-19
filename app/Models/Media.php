<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;
    protected $table = 'media';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['image_path','product_id'];
    public function product(){
        return $this->belongsTo(Product::class);

    }
}
