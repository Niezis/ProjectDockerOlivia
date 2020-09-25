<?php

namespace App\Http\Controllers\Oauth;

use App\Http\Controllers\Controller;
use App\{Oauth,User};
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class OauthController extends Controller
{
    public function redirectToProvider($provider){
        return Socialite::driver($provider)->redirect();
    }

    public function handleCallbackProvider($provider){
        try {
            $user = Socialite::driver($provider)->user();
        } catch (\Throwable $th) {
            return back();
        }
        $authUser = $this->findOrCreateUser($user,$provider);
        Auth::login($authUser,true);
        return redirect()->route("home");

    }

    public function findOrCreateUser($sosialUser,$provider){
        $sosialAccount = Oauth::where("provider_id",$sosialUser->getId())->
                        where("provider",$provider)->first();

        if ($sosialAccount){
            return $sosialAccount->user;
        }else{
            $user = User::where("email", $sosialUser->getEmail())->first();

            if (!$user){
                $user = User::create([
                    "name" => $sosialUser->getName(),
                    "email" => $sosialUser->getEmail()
                ])->assignRole('user');
            }

            $user->oauths()->create([
                "provider_id" => $sosialUser->getId(),
                "provider" => $provider
            ]);
            return $user;
        }

    }


}
