<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\subcriber;

class NewsletterController extends Controller
{
    
     ////// unsubscribe page
     public function unsubscribe($email){
        echo 'unscribe successfully';
     }
}
