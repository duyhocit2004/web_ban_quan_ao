<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roleModel extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = [
        'name'
    ];
}
