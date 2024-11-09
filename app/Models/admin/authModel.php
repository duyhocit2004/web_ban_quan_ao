<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class authModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'account';

    protected $fillable = [ 
        'username',
        'role_id',
        'image',
        'email',
        'password'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
