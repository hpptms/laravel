<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Avatar extends Component
{
    public $Avatar = "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736902/Avatars/Artboard_37.svg";

    public function push()
    {
      //0~6
      $Avatars = array(
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736902/Avatars/Artboard_37.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736902/Avatars/Artboard_38.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736902/Avatars/Artboard_36.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736901/Avatars/Artboard_35.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736901/Avatars/Artboard_34.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736901/Avatars/Artboard_33.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736900/Avatars/Artboard_31.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736900/Avatars/Artboard_32.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736900/Avatars/Artboard_30.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736899/Avatars/Artboard_29.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736899/Avatars/Artboard_28.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736898/Avatars/Artboard_27.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736898/Avatars/Artboard_26.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736896/Avatars/Artboard_22.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736898/Avatars/Artboard_25.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736897/Avatars/Artboard_24.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736897/Avatars/Artboard_23.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736896/Avatars/Artboard_21.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736895/Avatars/Artboard_19.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736894/Avatars/Artboard_16.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736895/Avatars/Artboard_20.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736895/Avatars/Artboard_18.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736895/Avatars/Artboard_17.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736894/Avatars/Artboard_15.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736893/Avatars/Artboard_14.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736893/Avatars/Artboard_10.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736893/Avatars/Artboard_11.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736893/Avatars/Artboard_12.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736893/Avatars/Artboard_13.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736892/Avatars/Artboard_1.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_42.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_44.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_43.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_39.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_41.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736891/Avatars/Artboard_40.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-07.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-05.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-06.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-03.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-02.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736793/Avatars/kidaha-04.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-01.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-08.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-09.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-10.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-11.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736791/Avatars/kidaha-12.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736621/Avatars/icons8-man-with-yellow-tie-in-jacket.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736621/Avatars/icons8-red-short-hair-lady-in-yellow-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736620/Avatars/icons8-man-with-orange-tie.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736621/Avatars/icons8-short-curly-hair-lady-in-pink-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736619/Avatars/icons8-man-with-beard-in-violet-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736618/Avatars/icons8-man-with-beard-in-suit.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736619/Avatars/icons8-man-with-brown-hair-in-green-sweater.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736616/Avatars/icons8-man-in-white-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736617/Avatars/icons8-man-in-yellow-striped-sweater.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736617/Avatars/icons8-man-in-white-shirt-2.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736616/Avatars/icons8-man-in-striped-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736615/Avatars/icons8-man-in-green-tie.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736616/Avatars/icons8-man-in-red-jacket.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736613/Avatars/icons8-indian-lady.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736614/Avatars/icons8-man-in-blue-t-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736613/Avatars/icons8-business-man-in-yellow-glasses.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736614/Avatars/icons8-man-in-green-sweater.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736614/Avatars/icons8-long-curly-hair-lady-with-glasses.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736612/Avatars/icons8-brown-short-hair-lady-in-yellow-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736612/Avatars/icons8-brown-pigtail-hair-lady.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736612/Avatars/icons8-brown-long-curly-hair-lady.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736612/Avatars/icons8-brown-long-hair-lady-with-red-glasses.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736611/Avatars/icons8-brown-hair-business-lady-with-glasses.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736612/Avatars/icons8-brown-curly-hair-lady-with-golden-earrings.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-brown-curly-hair-lady-in-light-green-shirt.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-two-ponytails-hair-lady-with-green-glasses.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-bald-man-in-green-jacket.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-blond-long-hair-business-lady.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-blond-curly-hair-business-lady.svg",
        "https://res.cloudinary.com/danj8nvfr/image/upload/v1632736610/Avatars/icons8-short-hair-business-lady-with-glasses.svg"
      );
      $arr_cou = (count($Avatars) - 1 );
      $int = mt_rand(0,$arr_cou);
      $this->Avatar =$Avatars[$int];

    }

    public function render()
    {
        return view('livewire.avatar');
    }
}
