<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\userMeta;
use App\Models\User;

class SocialiteController extends Controller
{

    public function SocialLiteLogin($type) {
        if($type == 'github'){
            return Socialite::driver('github')->redirect();
        }
    }

    
    public function SocialLiteGithub(){
        
        $githubUser = Socialite::driver('github')->user();
        
        $userMeta = userMeta::where('meta_data', $githubUser->id)->first();
        $user = User::where('email',$githubUser->nickname.'@github.com')->first();
        
        if ($user && $userMeta) {
            $user->update([
                'remember_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
            ]);
            userMeta::where('meta_key','github_token')->where('user_id',$userMeta->user_id)->update([
                'meta_data' => $githubUser->token,
            ]);
            userMeta::where('meta_key','github_refresh_token')->where('user_id',$userMeta->user_id)->update([
                'meta_data' => $githubUser->refreshToken,
            ]);
        } else {
            $user = User::create([
                'name' => $githubUser->nickname,
                'email' => $githubUser->email??$githubUser->nickname.'@github.com',
                'password'=> Hash::make(rand(100000,10000000000000)),
                'remember_token'=>$githubUser->token,
                'email_verified_at' => Carbon::now()
            ]);
            $tableValues =[
                'github_id' => $githubUser->id,
                'github_token' => $githubUser->token,
                'github_refresh_token' => $githubUser->refreshToken,
            ]; 
            foreach($tableValues as $key=>$values){
                $meta = userMeta::create([
                    'user_id'=>  $user->id,
                    'meta_key' => $key,
                    'meta_data'=>$values,
                ]);
            }
           
        }
     
        Auth::login($user);
        return redirect()->intended('/user/home');
    }
}
