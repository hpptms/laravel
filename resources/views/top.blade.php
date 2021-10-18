@include('cdn.bootstrap')
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
@extends('layouts.app')
@section('content')
<div class="py-12">

  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-bottom">
      <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
        <div>
          @include('parts.application-logo')
        </div>

        <div class="mt-8 text-2xl">
          メガホンでイベントを告知しよう
        </div>

        <div class="mt-6 text-gray-500">
          メガホンはオンラインのイベント、オフラインのイベント、２つ混ざりあったイベントも告知できます。<br>
          勉強会、ライブ、はたまたオンライン飲み会のメンバー募集、何でも使って下さい。
        </div>
      </div>
    </div>

    <div class="overflow-hidden shadow-xl sm:rounded-lg m-bottom kokuban">
      <div class="p-6 sm:px-20 border-gray-200 flex">
        <h2 class="text-2xl item">イベント予定</h2>
        <div class="item"><livewire:date></div>
      </div>
    </div>

    <div class="overflow-hidden sm:rounded-lg container m-bottom">
      <div class="center">
        <livewire:eventview>
      </div>
    </div>

  </div>
</div>




<script src="{{ mix('js/eventadd.js') }}" defer></script>
@include('parts.google-map')
@include('javascript.modal-video')
@include('cdn.stick')
@endsection
