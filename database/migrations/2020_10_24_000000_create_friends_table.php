<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{

    //新增資料表
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            //自動id
            $table->id();

            $table->string('name'); //姓名
            $table->string('email')->nullable(); //email - html文字方塊 input
            $table->string('tel')->nullable(); //電話 - html文字方塊 input
            $table->text('others')->nullable(); //其他 - html資料方塊 (textarea)

            $table->timestamps(); //時間搓

            //string -> 很少字元
            //text -> 很多字元
        });
    }

    //刪除資料表
    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
