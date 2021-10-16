<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class NavibarController extends Controller
{
  public $auth;
  public $dom;

  //ログインしているかチェック
  public function authcheck()
  {
      if(Auth::user() == null){
        return $auth = false;
      }
      return $auth = true;

  }

  //2箇所あるのでどちらで呼び出されたか判定
  public function domBranch($Request)
  {

    switch ($Request) {
      case "first":
        $this->firstdom();
      break;
      case "second":
        $this->seconddom();
      break;

    }

  }

  public function firstdom()
  {
    $auth = $this->authcheck();

    if($auth == false){
      $dom = <<<EOM
      <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
          <a href="/login" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>
          <a href="/register" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">登録</a>
      </button>
      EOM;
    }else{
      if(Auth::user()->photo !== null){
            $photo = Auth::user()->photo;
          }else{
            $photo = Auth::user()->profile_photo_url;
          }
          $name = Auth::user()->name;
          $dom = <<<EOM
          <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
              <img class="h-8 w-8 rounded-full object-cover" src="$photo" alt="$name" />
          </button>
          EOM;
        }
        echo $dom;
    }

  public function seconddom()
  {

      $auth = $this->authcheck();

      if($auth == false){

      }else{
        $photo = Auth::user()->profile_photo_url;
        $name = Auth::user()->name;
        $dom = <<<EOM
          <div class="flex-shrink-0 mr-3">
              <img class="h-10 w-10 rounded-full object-cover" src="$photo" alt="$name" />
          </div>
        EOM;
        echo $dom;
      }

  }
}
