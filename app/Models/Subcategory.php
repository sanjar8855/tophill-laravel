<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;

    protected $table = 'subcategory';

    public $incrementing = false;

    public $timestamps = false;

    public static function getNameBySubCatId($id){
        $subcategory = Subcategory::find($id);
        return $subcategory->name_uz;
    }

}
