<div id="top_dom" class="w-full sm:max-w-2xl mt-6 p-6 bg-white shadow-md overflow-hidden sm:rounded-lg prose xl">
  <div id="user_id" style="display:none">{{ $data['user_id'] }}</div>
  <div id="user_name" style="display:none">{{ $data['user_name'] }}</div>
  <div id="user_photo" style="display:none">{{ $data['user_photo'] }}</div>
  <div id="place" style="display:none">{{ $data['place'] }}</div>
  <div id="tag_id_1" style="display:none">{{ $data['tag_id_1'] }}</div>
  <div id="tag_id_2" style="display:none">{{ $data['tag_id_2'] }}</div>
  <div id="tag_id_3" style="display:none">{{ $data['tag_id_3'] }}</div>
  <div id="tag_id_4" style="display:none">{{ $data['tag_id_4'] }}</div>
  <div id="tag_id_5" style="display:none">{{ $data['tag_id_5'] }}</div>
  <div id="title" style="display:none">{{ $data['title'] }}</div>
  <div id="Overview" style="display:none">{{ $data['Overview'] }}</div>
  <div id="address" style="display:none">{{ $data['address'] }}</div>
  <div id="url" style="display:none">{{ $data['url'] }}</div>
  <div id="lat" style="display:none">{{ $data['lat'] }}</div>
  <div id="long" style="display:none">{{ $data['long'] }}</div>
  <div id="date" style="display:none">{{ $data['date'] }}</div>
  <div id="time" style="display:none">{{ $data['time'] }}</div>
  <div id="video" style="display:none">{{ $data['video_id'] }}</div>
  <div id="photo" style="display:none">{{ $data['photo'] }}</div>


  <h1 v-if="title !== ''" id="b_title" class="mb-3">
    @{{ title }}
  </h1>

  <div v-if="url !== ''" id="b_url" class="mb-3 flex">
    <span>URL：</span>
    <a v-bind:href="b_url">@{{ url }}</a>
  </div>

  <div v-if="Organizer !== ''" id="b_Organizer" class="mb-3 flex">
    <span>開催者：</span>
    <img class="h-8 w-8 rounded-full object-cover" src="{{ $data['user_photo'] }}" alt="{{ $data['user_name'] }}" />
    <span class="margin-left">@{{ Organizer }}</span>
  </div>

  <div class="slider">
    <div v-if="video !== ''" id="b_video" class="mb-3">
      <img id="Thumbnail" v-bind:data-video-id="video" class="js-modal-video">
      <!-- <img src="https://res.cloudinary.com/danj8nvfr/image/upload/v1633513886/play-button_igobqe.webp" alt="playbottom" class="playbottom"> -->
    </div>

    <div v-if="photo !== ''" id="b_photo"　class="mb-3">
      <img class="p_photo" v-bind:src="photo">
    </div>
  </div>

  <div v-if="place !== ''" id="b_place" class="mb-3">
    <h3>タグ</h3>
    <div class="place">@{{ place }}</div>
  </div>

  <div id="b_tag_group" class="mb-3 flex">
    <span v-if="tag1 !== ''" class="tag">@{{ tag1 }}</span>
    <span v-if="tag2 !== ''" class="tag">@{{ tag2 }}</span>
    <span v-if="tag3 !== ''" class="tag">@{{ tag3 }}</span>
    <span v-if="tag4 !== ''" class="tag">@{{ tag4 }}</span>
    <span v-if="tag5 !== ''" class="tag">@{{ tag5 }}</span>
  </div>

  <div v-if="oview !== ''" id="b_Overview" class="mb-3">
    <h3>イベント詳細</h3>
    <div>@{{ oview }}</div>
  </div>

  <div id="b_data_time" class="mb-3">
    <h3>開催日時</h3>
    <span id="data">@{{ date }}</span>
    <span id="time">@{{ time }}</span>
  </div>

  <div v-if="address !== ''" id="b_address" class="mb-3">
    <h3>開催場所</h3>
    <div>@{{ address }}</div>
  </div>

  <div class="content">
    <div class="box">
      <div id="map"></div>
    </div>
  </div>

</div>
