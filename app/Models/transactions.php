<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transactions extends Model
{
    use HasFactory;

    protected $table = "transaction";

    protected $fillabe = [
        'transaction_id', 
        'transaction_from', 	
        'transaction_phone',
        'transaction_email', 
        'amount',	
        'status', 	
        'transaction_date'
    ];
}
