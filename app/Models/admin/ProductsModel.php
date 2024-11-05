<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'color_id',
        'size_id',
        'category_id',
        'title',
        'image',
        'quantity',
        'code_products',
        'availability',
        'material',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public function size(){
        return $this->belongsTo(sizeModel::class,'size_id',);
    }
    public function color(){
        return $this->belongsTo(colorModel::class,'color_id',);
    }
    public function image(){
        return $this->hasMany(imagePoductModel::class,'link_image','id');
    }
}   
