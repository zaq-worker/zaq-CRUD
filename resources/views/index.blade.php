<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>一覧画面</title>
    </head>

    <body>
        <header>
                <div class="container-fluid text-center">
                    <p class="help-block"><h1>会員一覧</h1></p>
                    <hr />
                </div>
        </header>
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                                    <p class="col-sm-12 col-md-10 col-lg-7 container text-right">
                                        <a href="{{ route('userdata.create') }}">{{ __('>>登録') }}</a>
                                    </p>
                            <table class="table table-bordered col-sm-12 col-md-10 col-lg-7 container-fluid text-center">
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
                                    <td><a href='{{route("userdata.edit",["id" => $userdata->id]) }}'>{{ __('>>編集') }}</a></td>
                                </tr>@endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer style="position:absolute; bottom:0;">
            <hr/>
            <div class="container-fluid text-center">
                <p class="help-block"> ©CRUD.com 2021 </p>
            </div>
        </footer>
    </body>
</html>