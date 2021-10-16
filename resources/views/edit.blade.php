<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>user data</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <h2>会員編集 会員ID {{$userdata->id}}</h2>
        <form class=edit method="POST" action="{{route('userdata.update',['id' =>$userdata->id])}}">@csrf
            <div><input type="text" name=name value="{{$userdata->name}}">
            <div><input type="text" name=telephone value="{{$userdata->telephone}}">
            <div><input type="text" name=email value="{{$userdata->email}}">
        </div>
    </div>
</div>
    <input class=edit type="submit" value="編集"></form>
        <form method="POST" action="{{route('userdata.destroy',['id'=>$userdata->id])}}">@csrf
        <button type="submit">削除</button>
        <p><a class=return href="{{route('userdata.list')}}">{{ __('一覧に戻る') }}</a></p>
        </form>
    </body>
</html>