<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public $incrementing = false;

    public $timestamps = false;

    public static function getNameByCatId($id){
        $category = Category::find($id);
        return $category->name_uz;
    }
}
