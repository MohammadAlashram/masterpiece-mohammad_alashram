<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\logs;

class GoogleController extends Controller
{



    //to allow admin and super admin to auth
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();

        // $scopes = array(
        //     'https://www.googleapis.com/auth/plus.business.manage'
        // );
        // $parameters = ['access_type' => 'offline', "prompt" => "consent select_account"];
        // return Socialite::driver('google')->scopes($scopes)->with($parameters)->redirect();

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGoogleCallback()
    {
        try {

            $user = Socialite::driver('google')->stateless()->user();
            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {

                $token = $user->token;
                $refreshToken = $user->refreshToken;
                Auth::login($existingUser);
                // return redirect('/');
                return redirect('/')->with('message','');
                dd($user);
                
            } else {

                $newUser = User::create([
                    // 'image' => $user->avatar,
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => encrypt('Superman_test')
                ]);

                Auth::login($newUser);

                $action        = 'Self registration';
                $doer          = $user->email;
                $user          = 'User Detalis : ' . ' Email : ' . $user->email;
                $color         = 'success';
                $description   = 'User Is Added';
        
                logs::create([
                    'action'       => $action,
                    'doer'         => $doer,               
                    'user'         => $user,  
                    'color'        => $color,  
                    'description'  => $description,         
                ]);

                // return redirect('/');
                return redirect('/')->with('message','');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
