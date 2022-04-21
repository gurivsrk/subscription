<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meta_subscription extends Model
{
    use HasFactory;

    protected $table = "meta_subscription";

    protected $fillabe = [
       'index_id' ,	
       'meta_key',
       'meta_value'
    ];
}
