<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id'); //ユーザーID
            $table->integer('place_id'); //オンライン、オフライン、両方
            $table->string('tag_id_1')->nullable(); //タグ
            $table->string('tag_id_2')->nullable(); //タグ
            $table->string('tag_id_3')->nullable(); //タグ
            $table->string('tag_id_4')->nullable(); //タグ
            $table->string('tag_id_5')->nullable(); //タグ
            $table->string('title'); //タイトル
            $table->text('Overview')->nullable(); //概要
            $table->string('address')->nullable(); //オフラインの場合、場所
            $table->string('url')->nullable(); //オンラインの場合
            $table->string('lat')->nullable(); //緯度
            $table->string('long')->nullable(); //経度
            $table->date('date'); //日付
            $table->time('time'); //時間
            $table->text('photo')->nullable(); //写真
            $table->text('public_id')->nullable(); //写真のid
            $table->text('video')->nullable(); //youtubeなど
            $table->text('video_id')->nullable(); //youtubeなど
            $table->text('participant')->nullable(); //登録している人の参加表明
            $table->text('iine')->nullable(); //いいね
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
