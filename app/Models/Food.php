<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\Table\Table;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $primaryKey = 'id';
    public $timeStamps = true;

    protected $fillable = ['name','sl','description','category_id'];
    //protected $dateFormat = 'h:m:s';
    public function category(){
        return $this->belongsTo(Category::class);

    }
}
