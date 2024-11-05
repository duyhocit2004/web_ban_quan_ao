<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizeModel extends Model
{
    use HasFactory;
    protected $table = 'size';
    protected $fillable = [
        'name'
    ];
    
    public function product(){
        return $this->hasOne(ProdcutsModel::class,'size_id','id');
    }

}
