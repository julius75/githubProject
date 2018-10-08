<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

//        $authUser=new User();
//        //$authUses=User::firstOrCreate(['provider_id'=>$user->id]);
//        $authUses->name =$user->name;
//        $authUses->email =$user->email;
//        $authUses->provider=$provider;
//
//        $authUses->save();
//        auth()->login($authUses);
//
//        return redirect('/');
//
//        //dd($user);
//    }
        $exist=User::where('provider_id',$user->id)->first();
        if(User::where('provider_id',$user->id)->exists()){
            auth()->login($exist);
        }else{
            $authUsers=new User();
            $authUsers->provider_id=$user->id;
            $authUsers->name=$user->name;
            $authUsers->email=$user->email;
            $authUsers->avatar=$user->avatar;
            $authUsers->provider='github';
            $authUsers->save();
            auth()->login($authUsers);
        }

        return view('home');
    }
}
