<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\userMeta;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    
    
    // public function SocialLiteGithub(){
    //     $githubUser = Socialite::driver('github')->user();
        
    //     $userMeta = userMeta::where('meta_data', $githubUser->id)->first();
    //     $user = User::where('email',$githubUser->nickname.'@github.com')->first();
        
    //     if ($user && $userMeta) {
    //         $user->update([
    //             'remember_token' => $githubUser->token,
    //             'github_refresh_token' => $githubUser->refreshToken,
    //         ]);
    //         userMeta::where('meta_key','github_token')->where('user_id',$userMeta->user_id)->update([
    //             'meta_data' => $githubUser->token,
    //         ]);
    //         userMeta::where('meta_key','github_refresh_token')->where('user_id',$userMeta->user_id)->update([
    //             'meta_data' => $githubUser->refreshToken,
    //         ]);
    //     } else {
    //         $user = User::create([
    //             'name' => $githubUser->name,
    //             'email' => $githubUser->email??$githubUser->nickname.'@github.com',
    //             'password'=> Hash::make(rand(100000,10000000000000)),
    //             'remember_token'=>$githubUser->token,
    //             'email_verified_at' => now()
    //         ]);
    //         $tableValues =[
    //             'github_id' => $githubUser->id,
    //             'github_token' => $githubUser->token,
    //             'github_refresh_token' => $githubUser->refreshToken,
    //         ]; 
    //         foreach($tableValues as $key=>$values){
    //             $meta = userMeta::create([
    //                 'user_id'=>  $user->id,
    //                 'meta_key' => $key,
    //                 'meta_data'=>$values,
    //             ]);
    //         }
           
    //     }
     
    //     Auth::login($user);
    //     return redirect('/vsrk-admin');
    // }
    

}
