<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    public $incrementing = false;

    public $timestamps = false;

    public static function getNameByProductId($id){
        $product = Product::find($id);
        return $product->name_uz;
    }

}
