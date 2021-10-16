<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use JD\Cloudder\Facades\Cloudder;

class EventAddController extends Controller
{
  public function CreateEvent(Request $request)
  {

    $request->session()->regenerateToken();

    $event = new Event;
    $user_id = Auth::id();
    $user_name = User::find($user_id)->name;
    $user_photo = User::find($user_id)->photo;
    $place = Place::find($request['place_id_Radios'])->place;
    // イベントDBに反映
    if (!$event->exists) {
      if($request['eventVideo'] != ''){
        preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",$request['eventVideo'], $matches);
        $matches = $matches[1];
        $event['video'] = $request['eventVideo'];
        $event['video_id'] = $matches;
      }
      if($request['id'] != null){
        $event['id'] = $request['id'];
      }
      $event['user_id'] = $user_id;
      $event['place_id'] = $request['place_id_Radios'];
      $event['tag_id_1'] = $request['tag1'];
      $event['tag_id_2'] = $request['tag2'];
      $event['tag_id_3'] = $request['tag3'];
      $event['tag_id_4'] = $request['tag4'];
      $event['tag_id_5'] = $request['tag5'];
      $event['title'] = $request['title'];
      $event['Overview'] = $request['event-Overview'];
      $event['address'] = $request['address'];
      $event['url'] = $request['eventUrl'];
      $event['lat'] = $request['lat'];
      $event['long'] = $request['long'];
      $event['date'] = $request['date'];
      $event['time'] = $request['time'];
      $size = $this->get_image_size($request->file('image'));
      if ($image = $request->file('image')) {
        $image_path = $image->getRealPath();
        Cloudder::upload($image_path, null);
        $publicId = Cloudder::getPublicId();
        $logoUrl = Cloudder::secureShow($publicId, [
          'width'     => $size[0],
          'height'    => $size[1]
        ]);
        $event['photo'] = $logoUrl;
        $event['public_id']  = $publicId;
      }

      $event->save();
      $event['user_name'] = $user_name;
      $event['user_photo'] = $user_photo;
      $event['place'] = $place;
      return view('dashboard/event-add')->with('data', $event);
    }else{
      return redirect()->route('dashboard');
    }
  }

  public function ChangeEvent(Request $request)
  {
    $request->session()->regenerateToken();

    $event = Event::find($request['id']);
    $place = Place::find($request['place_id_Radios'])->place;
    // イベントDBに反映

    if($request['eventVideo'] != ''){
      preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user)\/))([^\?&\"'>]+)/",$request['eventVideo'], $matches);
      $matches = $matches[1];
      $event['video'] = $request['eventVideo'];
      $event['video_id'] = $matches;
    }
    $event['place_id'] = $request['place_id_Radios'];
    $event['tag_id_1'] = $request['tag1'];
    $event['tag_id_2'] = $request['tag2'];
    $event['tag_id_3'] = $request['tag3'];
    $event['tag_id_4'] = $request['tag4'];
    $event['tag_id_5'] = $request['tag5'];
    $event['title'] = $request['title'];
    $event['Overview'] = $request['event-Overview'];
    $event['address'] = $request['address'];
    $event['url'] = $request['eventUrl'];
    $event['lat'] = $request['lat'];
    $event['long'] = $request['long'];
    $event['date'] = $request['date'];
    $event['time'] = $request['time'];
    $size = $this->get_image_size($request->file('image'));
    if ($image = $request->file('image')) {
      $this->destroy($request['id']);
      $image_path = $image->getRealPath();
      Cloudder::upload($image_path, null);
      $publicId = Cloudder::getPublicId();
      $logoUrl = Cloudder::secureShow($publicId, [
        'width'     => $size[0],
        'height'    => $size[1]
      ]);
      $event['photo'] = $logoUrl;
      $event['public_id']  = $publicId;
    }

    $event->save();
    $event['place'] = $place;
    return view('dashboard/event-change-Preview')->with('data', $event);

  }

  public function get_image_size($file){
    $size = [0, 0];
    if(file_exists($file)){
      $size = getimagesize($file);
      if($size){
        $size = [$size[0], $size[1]];
      }
    }
    return $size;
  }

  public function destroy($id)
  {
    $event = event::find($id);

    if(Auth::id() !== $event['user_id']){
      return abort(404);
    }

    if(isset($event['public_id'])){
      Cloudder::destroyImage($event['public_id']);
    }
  }
}
