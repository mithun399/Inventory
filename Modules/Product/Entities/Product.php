<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','name','description','category_id','price','cost','vendor_id','UoM',
    ];
    public function products(){
        return $this->belongsToMany(Product::class,'id','product_id');
    }

    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductFactory::new();
    }
    public $timestamps=false;
}
