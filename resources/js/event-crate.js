let number  = 2;
$('#tag-add').click(function() {
  if(number <= 5){
    $('#tags').append(`<input type='tag' class='form-control' id='tag' name='tag${number}'>`);
    number = ++number;
  }
});

$('#address-fix').click(function(){
  $('.content').show('slow');
  geocode();
});

$('#place_id_Radios_1').click(function(){
  $('.online').hide('slow');
});

$('#place_id_Radios_2,#place_id_Radios_3 ').click(function(){
  $('.online').show('slow');
});

$('#edit_image').on('change', function (e) {
  $('.photo-content').animate({
    "height": "624px"
  },"slow")
  $('#Preview-fix').show('slow');
});

$('#Preview-fix').click(function(){
  $('#Preview').css('background-size', '100%');
});

var place_id = $('#place_id').text();
if(place_id != ''){
  switch (place_id) {
    case "1":
    $('#place_id_Radios_1').prop('checked', true);
    break;
    case "2":
    $('#place_id_Radios_2').prop('checked', true);
    $('.online').show('slow');
    $('.content').show('slow');
    break;
    case "3":
    $('#place_id_Radios_3').prop('checked', true);
    $('.online').show('slow');
    $('.content').show('slow');
    break;
  }
};

let photo = $('#load_photo').text();
if(photo != ''){
  $('#Preview').css('background-image', `url(${photo})`);
  $('#div_Preview').show();
  $('.photo-content').animate({
    "height": "624px"
  },"slow");
}

// プレビューのファイル名が長すぎて高さを取れない・・・解決したい
// // 監視ターゲットの取得
// const target = document.getElementById('Preview')
//
// // オブザーバーの作成
// const observer = new MutationObserver(records => {
//   let bgImage = $('.event-photo').css('background-image').replace(/^url|[\(\)]/g, '');
//   let element = new Image() ;
//
// element.onload = function () {
// 		let width = element.naturalWidth ;
// 		let height = element.naturalHeight ;
// }
//
// element.src = bgImage ;
// })
//
// // 監視の開始
// observer.observe(target, {
//   attributes: true,
//   attributeFilter: ['class', 'style']
// })


let marker;
let lat = jQuery('#load_lat').text();
let long = jQuery('#load_long').text();
let geocode = function(){
  let address = $('#address').val();
  let geocoder = new google.maps.Geocoder();
  geocoder.geocode({ 'address': address }, function (results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      let latitude = results[0].geometry.location.lat();
      let longitude = results[0].geometry.location.lng();
      let marker_address = results[0].formatted_address;
      let mapOptions = {
        center: new google.maps.LatLng(latitude, longitude),
        zoom: 16
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
        labelStyle: { opacity: 0.75 }
      });
      google.maps.event.addListener(marker, 'mouseup', mouseupEventFunc);
      $("#lat").val(latitude);
      $("#long").val(longitude);
    }
  })
}

function mouseupEventFunc(event) {
  lat = marker.getPosition().lat();
  lng = marker.getPosition().lng();
}


let latitude;
let longitude;
let marker_address;
let geocode_to_latlond = function(){
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
  if(lat != '' && long != ''){
    geocode_to_latlond();
  };
});
