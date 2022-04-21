<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userMeta extends Model
{
    use HasFactory;
    
    protected $table = "user_meta_data";

    protected $fillable = [
        'user_id',
        'meta_key',
        'meta_data',
    ];
}
