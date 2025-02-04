<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;

    protected $fillable = [
        'host_name',
        'username',
        'password',
        'server_port'
    ];
}
