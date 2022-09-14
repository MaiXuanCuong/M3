<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table        = 'products';
    protected $primaryKey   = 'id';
    // public $timestamps = false;

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function orders(){
        return $this->belongsToMany(Order::class,'order_detail','product_id','order_id');
    }
    
}
