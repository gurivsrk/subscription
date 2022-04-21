<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;

    protected $table = "subscription";

    protected $fillabe = [
        'user_id',
        'package_id',
        'transaction_id' 
    ];

}
