<x-guest-layout>
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Dashboard
      </h2>
    </div>
  </header>
  <div class="py-12">

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
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

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
          <div class="p-6">
            <div class="flex items-center">
              <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632648264/announcement_c7srjz.svg" alt="crete">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('create-event') }}">イベント作成</a></div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-sm text-gray-500">
                イベントを作成しましょう。<br>ちょっと暇だなと思ったらオンラインゲームのメンバー募集もありだし、映画を一緒に見て感想を語り合いたいなんてことも。
              </div>

              <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
              </div>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
            <div class="flex items-center">
              <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632648843/presentation_bl0zur.svg" alt="watch">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('event-Preview') }}">イベント管理</a></div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-sm text-gray-500">
                作成したイベントを編集したり、削除したり出来ます。
              </div>


              <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">


                <div class="ml-1 text-indigo-500">

                </div>
              </div>
            </div>
          </div>

          <div class="p-6 border-t border-gray-200">
            <div class="flex items-center">
              <livewire:avatar>
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('profile.show') }}">プロフィール設定</a></div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-sm text-gray-500">
                写真や名前を自由に変更できます。
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
        </div>
      </div>
    </div>
  </x-guest-layout>
