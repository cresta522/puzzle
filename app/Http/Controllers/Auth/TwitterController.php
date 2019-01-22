<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\User;

class TwitterController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $twitter_user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }

        $user = User::where('twitter_id', $twitter_user->id)->first();

        if(is_null($user) === true){
            $user = User::create([
                'token' => $twitter_user->token,
                'tokenSecret' => $twitter_user->tokenSecret,
                'twitter_id' => $twitter_user->id,
                'nickname' => $twitter_user->nickname,
                'name' => $twitter_user->name,
                'email' => $twitter_user->email,
                'avatar' => $twitter_user->avatar,
                'avatar_original' => $twitter_user->avatar_original,
            ]);
        }

        Auth::login($user);
        return redirect('/');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect();
    }
}
