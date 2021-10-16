<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{

  public function getGoogleAuth()
  {
     return Socialite::driver('google')->redirect();
  }

  public function authGoogleCallback()
  {
    $googleUser = Socialite::driver('google')->stateless()->user();

    $user = User::firstOrNew(['email' => $googleUser->email]);
    if (!$user->exists) {
        $user['name'] = $googleUser->getNickname() ?? $googleUser->getName() ?? $googleUser->getNick();
        $user['email'] = $googleUser->email;
        $user['email_verified_at'] = 1;
        $user['public_id'] = $googleUser->getId();
        $user['nickname'] = $googleUser->getNickname() ?? $googleUser->getName() ?? $googleUser->getNick();
        $user->save();
    }
  Auth::login($user);
  return redirect('dashboard/welcome');
  }

}
