<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['name','color','image_path','price','description','release_year','brand_id'];
    //protected $dateFormat = 'h:m:s';
    public function brand(){
        return $this->belongsTo(Brand::class);

    }
    public function media(){
        return $this->hasMany(Media::class);
    }
    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }
}
