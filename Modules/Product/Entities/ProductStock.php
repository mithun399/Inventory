<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product_Stock extends Model
{
    use HasFactory;

    protected $fillable = [
            'id','product_id','stock_quantity','UoM'];
            public function products(){
                    return this->hasmany(ProductStock::class,'product_id','id');
                }
    protected static function newFactory()
    {
        return \Modules\Product\Database\factories\ProductStockFactory::new();
    }
    public $timestamps=false;
}
