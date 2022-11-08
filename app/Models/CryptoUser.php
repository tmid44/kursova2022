<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoUser extends Model
{
    use HasFactory;

    protected $table = 'crypto_users';
    protected $guarded = false;
}
