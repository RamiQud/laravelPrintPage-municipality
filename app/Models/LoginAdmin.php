<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginAdmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'numberId', 'password',
    ];
}
