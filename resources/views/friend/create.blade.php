<h1>列表畫面</h1>

<a href="{{route('friend.create')}}">新增</a>
<br>
<hr>

@foreach($friends as $friend)
{{--  {{dd($friends, $friend)}}--}}
    姓名：{{$friend->name}}<br>
    Email:{{$friend->email}}<br>
    Tel:{{$friend->tel}}<br>
    其他:{{$friend->others}}<br>
    <a href="http://xyz.test/friend/{{$friend->id}}/edit" target="_blank">編輯-{{$friend->id}}</a>

    {{--Delete=destroy--}}
    <form method="post" action="{{route('friend.destroy',['friend'=>$friend->id])}}" >
        @csrf
        @method('delete')
        <input type="submit" value="Submit-提交按鈕-刪除"/>
        <button type="submit" >刪除</button>
    </form>

    <hr>
@endforeach



