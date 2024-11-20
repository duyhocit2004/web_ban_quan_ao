<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentMethodModel extends Model
{
    use HasFactory;
    protected $table = 'payment_method';
    protected $fillable = [
        'name'
    ];
}
