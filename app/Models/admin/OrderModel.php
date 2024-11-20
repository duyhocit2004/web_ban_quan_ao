<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderModel extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'order';
    protected $fillable = [
        'username',
        'user_id',
        'phone',
        'email',
        'updated_at'
    ];
}
