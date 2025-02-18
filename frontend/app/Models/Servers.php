<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servers extends Model
{
    use HasFactory;

    protected $fillable = [
        "host_name",
        "username",
        "server_port",
        "access_method",
        'password',
        'ssh_public_key',
    ];
}
