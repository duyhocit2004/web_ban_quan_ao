<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomeModel extends Model
{
    use HasFactory,SoftDeletes;

    private $table = 'products';

    private $fillable = [
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
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
