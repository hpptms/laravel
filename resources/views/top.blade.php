@include('cdn.bootstrap')
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<x-guest-layout>
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

      <div class="bg-opacity-25 grid grid-cols-1 md:grid-cols-2 mizuiro">

        <div class="p-6 border-t border-gray-200">
          <div class="flex items-center">
            <livewire:avatar>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard') }}">プロフィール作成</a></div>
          </div>

          <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
              登録してイベントを作成しましょう
            </div>
          </div>
        </div>

        <div class="p-6 border-t border-gray-200 md:border-l">
          <div class="flex items-center">
            <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632794462/view_gzok3x.svg" alt="caution">
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('policy') }}">注意事項</div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-sm text-gray-500">
                メガホンを使用して頂く上の注意事項です。
              </div>
            </div>
          </div>
        </div>




        <script src="{{ mix('js/eventadd.js') }}" defer></script>
        @include('parts.google-map')
        @include('javascript.modal-video')
        @include('cdn.stick')
      </x-guest-layout>
