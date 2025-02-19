<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class petugas extends Authenticatable
{
    
    protected $fillable = ['name', 'email', 'password', 'nama_petugas', 'level'];
}
