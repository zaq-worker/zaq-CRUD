<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>user data</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <h2></h2>
        <table>
            <tr>
                <td class=create></td>
                <td class=create></td>
                <td class=create></td>
                <td class=create><a href="{{ route('userdata.create') }}">{{ __('>>登録') }}</a></td>
            </tr>
            <tr>
                <th>名前</th>
                <th>電話番号</th>
                <th>メールアドレス</th>
                <th></th>
            </tr>@foreach($userdatas as $userdata)
            <tr>
                <td>{{$userdata->name}}</td>
                <td>{{$userdata->telephone}}</td>
                <td>{{$userdata->email}}</td>
                <td><a class=edit href='{{route("userdata.edit",["id" => $userdata->id]) }}'>{{ __('>>編集') }}</a></td>
            </tr>@endforeach
        </table>
    </body>
</html>