<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsAttribute extends Model
{
    use HasFactory;

    public static function productStock($product_id,$size){
        $productStock = ProductsAttribute::select('stock')->where(['product_id'=>$product_id,'size'=>$size])->first();
        return $productStock->stock;
    }

    public function getAttributetDetails($product_id){
        $getProductDetails = Product::where('id',$product_id)->first()->toArray();
        return $getProductDetails;
    }
}
