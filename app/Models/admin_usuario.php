<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin_usuario extends Model
{
    /** @use HasFactory<\Database\Factories\AdminUsuarioFactory> */
    use HasFactory;
    protected $table = 'admin_usuarios';
    protected $fillable = [
        'username',
        'password',
   
    ];
}
