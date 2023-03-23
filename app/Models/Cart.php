<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $primaryKey = 'id';
    public $timeStamps = true;
    protected $fillable = ['user_id'];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
