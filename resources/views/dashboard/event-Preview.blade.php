@include('cdn.bootstrap')
<x-guest-layout>
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        イベント管理
      </h2>
    </div>
  </header>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <div class="p-6 sm:px-20 bg-white border-b border-gray-200 flex">
          <div>
            <img class="icon-128" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1632648843/presentation_bl0zur.svg" alt="watch">
            <div class="text-2xl">
              イベント管理
            </div>
          </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">

          <div class="p-6 border-gray-200">
            <div class="flex items-center">
              <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1633843908/checklist_fa7qxp.svg" alt="caution">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">作成したイベント</div>
            </div>

            <div class="ml-12">
              <div class="mt-2 text-sm text-gray-500">
                <livewire:makes>
              </div>
            </div>
          </div>

          <div class="p-6 border-gray-200 md:border-l">
            <div class="flex items-center">
              <img class="icon-64" src="https://res.cloudinary.com/danj8nvfr/image/upload/v1633843941/calendar_s4uqg0.svg" alt="caution">
              <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">参加予定のイベント</div>
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
