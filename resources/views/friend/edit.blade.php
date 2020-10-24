
{{--Form提交到哪裡, 由action = route 決定--}}
<form method="post" action="{{route('friend.update',['friend' => $friend->id])}}">
    @csrf {{--防止攻擊的參數--}}
    @method('put')
    姓名：<input type="text" name="name" value="{{$friend->name}}" /><br>
    Email：<input type="text" name="email" value="{{$friend->email}}" /><br>
    電話：<input type="text" name="tel" value="{{$friend->tel}}" /><br>

    {{--按鈕--}}
    <a href="http://xyz.test/friend">放棄</a>
    <button type="submit">Submit提交-儲存</button>
</form>
    其他：<input type="text" name="others" value="{{$friend->others}}" /><br>
