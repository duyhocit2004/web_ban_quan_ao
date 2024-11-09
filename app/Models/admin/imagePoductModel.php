<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagePoductModel extends Model
{
    use HasFactory;

    protected $table = 'image_products';
    protected $fillable = [
        'product_id',
        'link_image'
    ];
}
