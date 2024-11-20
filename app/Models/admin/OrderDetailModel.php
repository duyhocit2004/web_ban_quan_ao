<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetailModel extends Model
{
    use HasFactory;
    
    protected $table = 'detail_order';
    protected $fillable = [
        'products_id',
        'order_id',
        'price',
        'quantity',
        'sum',
        'note',
        'payment_status_id',
        'payment_method_id'
    ];
}
