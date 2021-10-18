<nav class="sidebar shadow-sm">
    <div class="brand p-4">
        <div class="flex">

                <a href="/">
                @include('parts.application-mark')
                </a>

            <div class="flex-shrink-0 flex items-center">メガホン</div>
        </div>
    </div>
    <ul class="nav flex-column m-o p-3">
        <div class="border-t border-gray-200 p-top">
          <div class="items-center">
            <livewire:avatar>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('dashboard') }}">プロフィール作成</a></div>
          </div>

            <div class="mt-2 text-sm text-gray-500">
              登録してイベントを作成しましょう
            </div>
        </div>
        <div class="border-t border-gray-200 p-top">
            <div class="items-center">
                <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632794462/view_gzok3x.svg" alt="caution">
                <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="{{ route('policy') }}">注意事項</a></div>
            </div>


              <div class="mt-2 text-sm text-gray-500">
                メガホンを使用して頂く上の注意事項です。
              </div>
        </div>

    </ul>
</nav>
