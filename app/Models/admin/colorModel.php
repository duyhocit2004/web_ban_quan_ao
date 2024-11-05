<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class colorModel extends Model
{
    use HasFactory;
    protected $table = 'color';
    protected $fillable = [
        'name'
    ];
    public function products(){
        return $this->hasOne(ProductsModel::class,'color_id');
    }
}
