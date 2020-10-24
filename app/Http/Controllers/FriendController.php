<?php

namespace App\Http\Controllers;


//控制器
use App\Models\Friend;

class FriendController
{
    //列表-多筆 xyz.text/friend
    public function index(){
        //抓取所有變數
        $all = request()->input();

        //get() -> 取得所有資料
        $friends = Friend::get();

        return view('friend.index' ,
            ["friends" => $friends]
        );
    }

    //編輯-單筆
    public function edit($friend_id)
    {
        //抓取所有變數
        $all = request()->input();

        //撈資料
        $friend = Friend::find($friend_id);

        return view('friend.edit',
            ["friend" => $friend]);
    }

    //更新聯絡人
    public function update($friend_id)
    {
        //抓取所有變數
        $all = request()->input();

        //抓取對應的聯絡人
        $friend = Friend::find($friend_id);

        //儲存資料
        $friend->name = request()->input('name');
        $friend->tel = request()->input('tel');
        $friend->email = request()->input('email');
        $friend->save();

        //返回列表
        return $this->index();
    }

    //刪除
    public function destroy($friend_id){

        //抓取所有變數
        $all = request()->input();

        //抓取對應的聯絡人
        $friend = Friend::find($friend_id);

        //刪除
        $friend->delete();

        //redirect重新導向到....
        return redirect( route('friend.index') );
    }

    public function create()
    {
        return view('friend.create');
    }

    //新增-儲存
    public function store()
    {
        //抓取所有變數
        $all = request()->input();

        //新增
        $friend = new Friend();

        //賦予資料
        $friend->name = request()->input('name');
        $friend->tel = request()->input('tel');
        $friend->email = request()->input('email');
        $friend->others = request()->input('others');
        $friend->save();

        //redirect重新導向到....
        return redirect( route('friend.index') );
    }
}
