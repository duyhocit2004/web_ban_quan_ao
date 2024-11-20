<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table = 'order';
    protected $fillable = [
        'username',
        'user_id',
        'phone',
        'email',
        ''
    ];
}
