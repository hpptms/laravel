let user_id = $('#user_id').text();
let user_name = $('#user_name').text();
let place = $('#place').text();
let tag_id_1 =$('#tag_id_1').text();
let tag_id_2 = $('#tag_id_2').text();
let tag_id_3 = $('#tag_id_3').text();
let tag_id_4 = $('#tag_id_4').text();
let tag_id_5 = $('#tag_id_5').text();
let title = $('#title').text();
let oview = $('#Overview').text();
let address = $('#address').text();
let url = $('#url').text();
let lat = $('#lat').text();
let long = $('#long').text();
let date = $('#date').text();
let time = $('#time').text();
let video = $('#video').text();
let photo = $('#photo').text();

//タイトル
var b_title = new Vue({
  el: '#b_title',
  data: {
    title: title,
    b_link: url
  }
});

//url
var b_url = new Vue({
  el: '#b_url',
  data: {
    url: url,
    b_url: url
  }
});

//開催者
var b_Organizer = new Vue({
  el: '#b_Organizer',
  data: {
    Organizer: user_name
  }
});

//動画
var b_video = new Vue({
  el: '#b_video',
  data: {
    video: video
  }
});

//サムネイルを取得
const THUMB_TYPES = [
  /** w1280 */
  'maxresdefault.jpg',
  /** w640 */
  'sddefault.jpg',
  /** w480 */
  'hqdefault.jpg',
  /** w320 */
  'mqdefault.jpg',
  /** w120 */
  'default.jpg',
];

if($('#video').text() != ''){
  const getYtThumbnail = async (video) => {
    // 画像をロードする処理
    const loadImage = (src) => {
      return new Promise((resolve, reject) => {
        const img = new Image();
        img.onload = (e) => resolve(img);
        img.src = src;
      });
    };

    for (let i = 0; i < THUMB_TYPES.length; i++) {
      const fileName = `https://img.youtube.com/vi/${video}/${THUMB_TYPES[i]}`;

      const res = await loadImage(fileName);

      // ダミー画像じゃなかったら（横幅が121px以上だったら）
      // もしくは、これ以上小さい解像度が無かった場合は、このURLで決定
      if (
        !THUMB_TYPES[i + 1]
        || (res).width > 120
      ) {
        return fileName;
      }
    }
  }


  (async () => {
    const videoThumbnail = await getYtThumbnail(video);
    document.getElementById('Thumbnail').src = videoThumbnail;

  })();
};


// 動画を表示
if($('#video').text() != ''){
  const viewVideo = $(function () {
    if ($(".js-modal-video").length) { //クラス名js-modal-videoがあれば以下を実行
      $(".js-modal-video").modalVideo({
        channel: "youtube",
        youtube: {
          rel: 0, //関連動画の指定
          autoplay: 0, //自動再生の指定
        },
      });
    }
  });
};
// jQuery(document).ready(function(){
//   jQuery('.playbottom').click(function(){
//     jQuery('#Thumbnail').click();
//   })
// });

//画像
let b_photo = new Vue({
  el:'#b_photo',
  data:{
    photo: photo
  }
});

if($('#video').text() != '' || $('#photo').text() != ''){
  $('.slider').slick({
    dots:true,
  });
};

//オフライン・オンライン・両方
let b_place = new Vue({
  el:'#b_place',
  data:{
    place: place
  }
});

//tag
let b_tag_group = new Vue({
  el:'#b_tag_group',
  data: {
    tag1: tag_id_1,
    tag2: tag_id_2,
    tag3: tag_id_3,
    tag4: tag_id_4,
    tag5: tag_id_5
  }
});

//概要
let b_Overview = new Vue({
  el:'#b_Overview',
  data:{
    oview : oview
  }
});

//開催日時
let b_data_time = new Vue({
  el:'#b_data_time',
  data: {
    date: date,
    time: time
  }
});

//開催場所
let b_address = new Vue({
  el:'#b_address',
  data: {
    address: address
  }
});

let marker;
let latitude;
let longitude;
let marker_address;
let geocode = function(){
  const geocoder = new google.maps.Geocoder();
  const position = new google.maps.LatLng(lat,long);
  geocoder.geocode({ 'location' : position }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      latitude = results[0].geometry.location.lat();
      longitude = results[0].geometry.location.lng();
      marker_address = results[0].formatted_address;
    }
    let mapOptions = {
      zoom: 14,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      center: position
    };

    const map = new google.maps.Map(document.getElementById("map"), mapOptions);

    marker = new google.maps.Marker({
      position: new google.maps.LatLng(latitude, longitude),
      draggable: true,
      raiseOnDrag: true,
      map: map,
      labelContent: "label-Content",
      labelAnchor: new google.maps.Point(22, 0),
      labelClass: "labels", // the CSS class for the label
      labelStyle: { opacity: 0.75 },
      content: marker_address
    });
    var infoWindow = new google.maps.InfoWindow({
      content: marker_address
    });
    // マーカーのクリックイベントの関数登録
    google.maps.event.addListener(marker, 'click', function(event) {
      // 情報ウィンドウの表示
      infoWindow.open(map, marker);
    });
  });
};

window.addEventListener("load", function() {
  if($('#lat').text() != '' && $('#long').text() != ''){
    geocode();
  };
});

window.addEventListener("load", function() {
  if($('#top_dom').outerHeight(true) != 0 ){
    var dom_height = $('#top_dom').outerHeight(true);
    $('.container').height(dom_height);
  }
});
