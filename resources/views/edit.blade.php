<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>編集画面</title>
    </head>

    <body>
        <header>
            <div class="container-fluid text-center">
                <p class="help-block"><h1>会員編集 ID {{$userdata->id}}</h1></p>
                <hr/>
            </div>
        </header>
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <div class="d-flex align-items-center justify-content-center">
                                <form method="POST" action="{{route('userdata.update',['id' =>$userdata->id])}}" class="col-sm-10 col-md-7 col-lg-6 justify-content-center">@csrf
                                        <div class="mb-2">
                                            <label for="name" class="form-label">名前</label>
                                            <input type="text" class="form-control" name="name" value="{{$userdata->name}}">
                                            <label for="tell">電話番号</label>
                                            <input type="tell" class="form-control" name="telephone" value="{{$userdata->telephone}}">
                                            <label for="email">メールアドレス</label>
                                            <input type="email" class="form-control" name="email" value="{{$userdata->email}}">
                                            <p class="text-center"><input type="submit" class="btn btn-primary mt-2" value="編集"></p>
                                        </div>
                            </div>
                                </form>
                                    <form method="POST" action="{{route('userdata.destroy',['id' =>$userdata->id])}}">@csrf
                                        <p class="mb-3 text-center"><button type="submit" class="btn btn-primary">削除</button></p>
                                        <p class="text-center"><a href="{{route('userdata.list')}}">{{ __('一覧に戻る') }}</a></p>
                                    </form>
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