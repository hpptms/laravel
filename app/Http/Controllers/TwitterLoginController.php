<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TwitterLoginController extends Controller
{

  //Twitterの認証ページへユーザーをリダイレクト
  public function redirectToProvider()
  {
      return Socialite::driver('twitter')->redirect();
  }

  //ログイン
  public function handleProviderCallback()
  {
      try {
          //認証結果の受け取り
          $twitterUser = Socialite::driver('twitter')->user();
      } catch (Exception $e) {
          return redirect('/');
      }

      $authUser = $this->findOrCreateUser($twitterUser);
      Auth::login($authUser, true);

      return redirect('dashboard/welcome');

  }

  //Twitterユーザー情報をもとに、ユーザー情報を取得するか新たにユーザーを作成する
  public function findOrCreateUser($twitterUser)
  {

      $authUser = User::where('nickname', strval($twitterUser->nickname))->first();

      if($authUser !== null){
        if ($twitterUser->nickname == $authUser->nickname) {
              return $authUser;
        }
      }

      //DBにユーザー情報がなければ作成する
      return User::create([
          'name' => $twitterUser->name,
          'nickname' => $twitterUser->nickname,
          'photo' => $twitterUser->avatar_original,
      ]);

  }

  public function logout()
  {
      Auth::logout();

      return redirect('/');
  }
}
