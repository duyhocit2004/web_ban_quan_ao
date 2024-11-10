<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accountModel extends Model
{
    use HasFactory;
    
    protected $table = 'account';
    protected $fillable = [
        'username',
        'phone',
        'image',
        'date_of_birth',
        'address',
        'email',
        'password',
        'role_id'
    ];
}
