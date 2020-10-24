<h1>列表畫面</h1>
@foreach($friends as $friend)
{{--  {{dd($friends, $friend)}}--}}
    姓名：{{$friend->name}}<br>
    Email:{{$friend->email}}<br>
    Tel:{{$friend->tel}}<br>
    其他:{{$friend->others}}<br>
    <a href="http://xyz.test/friend/{{$friend->id}}/edit" target="_blank">編輯-{{$friend->id}}</a>
    <hr>
@endforeach
