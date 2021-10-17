@include('cdn.bootstrap')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@extends('layouts.guest')
@section('content')
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        イベント作成
      </h2>
    </div>
  </header>
  <div class="py-12">
    <div class="min-h-screen flex flex-col items-center pt-6 sm:pt-0">
      <div>
        <img src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632124766/icons8-%E3%83%A1%E3%82%AC%E3%83%9B%E3%83%B3-96_pletbm.webp" alt="megaphon">
      </div>

      <div class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose xl">

        <h1 class="fs-1">イベント作成</h1>
        <form action="{{ route('eventauth.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- イベント形式 -->
          <h2>イベント形態</h2>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="place_id_Radios" id="place_id_Radios_1" value="1" checked>
            <label class="form-check-label" for="place_id_Radios_1">
              オンライン
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="place_id_Radios" id="place_id_Radios_2" value="2">
            <label class="form-check-label" for="place_id_Radios_2">
              オフライン
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="place_id_Radios" id="place_id_Radios_3" value="3">
            <label class="form-check-label" for="place_id_Radios_3">
              両方
            </label>
          </div>
          <!-- イベント形式 -->
          <!-- タイトル -->
          <h3>イベント名</h3>
          <div class="mb-3">
            <input type="title" class="form-control" id="title" name="title" required>
          </div>
          <!-- タイトル -->
          <!-- 概要 -->
          <h3>イベント詳細</h3>
          <div class="mb-3">
            <textarea class="form-control" id="event-Overview" name="event-Overview" placeholder="空欄でも大丈夫です"></textarea>
          </div>
          <!-- 概要 -->
          <!-- タグ -->
          <h3>タグを付ける</h3>
          <div class="mb-3" id="tags"><button type="button" class="btn btn-primary" id="tag-add">タグを増やす</button>
            <input type="tag" class="form-control" id="tag" name="tag1" placeholder="最大5個までつけれます">
          </div>
          <!-- タグ -->
          <!-- 場所 -->
          <div class="online" style="display:none">
            <h3>イベント開催地</h3>
            <div class="mb-3">
              <textarea class="form-control" id="address" name="address"></textarea>
              <button type="button" class="btn btn-primary" id="address-fix" name="address-fix">地図で表示</button>
            </div>
          </div>
          <!-- 場所 -->
          <div class="online" style="display:none">
            <div class="content" style="display:none">
              <div class="box">
                <div id="map"></div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            <!-- 緯度経度 -->
            <input type="lat" class="form-control" id="lat" name="lat" style="display:none">
            <input type="long" class="form-control" id="long" name="long" style="display:none">
          </div>
          <!-- 場所 -->
          <!-- イベントUR? -->
          <h3>イベントURL</h3>
          <div class="mb-3">
            <input type="title" class="form-control" id="event-url" name="eventUrl" pattern="https?://[\w!?/+\-_~;.,*&@#$%()'[\]]+" placeholder="https or http">
          </div>
          <!-- イベントURL -->
          <!-- 開催日-->
          <!-- 開始時間 -->
          <h3>開催日：開始時間</h3>
          <div class="mb-3">
            <input id="datepickerfrom" type="date" name="date" required />
            <input id="datepickerfrom" type="time" name="time" required />
          </div>
          <!-- 開催予定日 -->
          <!-- 開始時間 -->
          <!-- イベント告知写真 -->
          <h3>イベント告知写真</h3>
          <div class="photo-content">
            <div class="box">
              <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <input type="file" class="hidden" id="edit_image" name="image"
                wire:model="photo"
                x-ref="photo"
                x-on:change="
                photoName = $refs.photo.files[0].name;
                const reader = new FileReader();
                reader.onload = (e) => {
                  photoPreview = e.target.result;
                };
                reader.readAsDataURL($refs.photo.files[0]);
                " />
                <div class="mt-2" x-show="photoPreview">
                  <span class="block event-photo bg-no-repeat bg-center" id="Preview"
                  x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                </span>
              </div>

              <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('写真を貼る') }}
              </x-jet-secondary-button>
              <button type="button" class="btn btn-primary" id="Preview-fix" style="display:none">比率を合わせる</button>
            </div>
          </div>
        </div>
        <!-- イベント告知写真 -->
        <!-- イベント告知動画 -->
        <h3>イベント告知動画(今のところyoutubeだけです)</h3>
        <div class="mb-3">
          <input type="title" class="form-control" id="event-video" name="eventVideo" pattern="https\:\/\/)?(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)+[\S]{11}\" placeholder="https or http">
        </div>
        <!-- イベント告知動画 -->
        <div class="mb-3">
          <button type="submit" class="btn btn-primary btn-lg btn-block" value="submit">イベント作成</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ mix('js/event-crate.js') }}" async></script>
@include('parts.google-map')
@endsection
