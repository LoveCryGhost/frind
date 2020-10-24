{{--Form提交到哪裡, 由action = route 決定--}}
<form method="post" action="{{route('friend.store')}}">
    @csrf {{--防止攻擊的參數--}}
{{--    @method('put')--}}

    姓名：<input type="text" name="name" value="" /><br>
    Email：<input type="text" name="email" value="" /><br>
    電話：<input type="text" name="tel" value="" /><br>
    其他：<input type="text" name="others" value="" /><br>

    {{--按鈕--}}
    <a href="http://xyz.test/friend">放棄</a>
    <button type="submit">Submit提交-儲存</button>
</form>

