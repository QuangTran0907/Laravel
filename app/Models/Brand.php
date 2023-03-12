<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['name','description','image_path'];
    public function products(){
        return $this->hasMany(Product::class);

    }
}
