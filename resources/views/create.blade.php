<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        <title>登録画面</title>
    </head>

    <body>
        <header>
                <div class="container-fluid text-center">
                    <p class="help-block"><h1>会員登録</h1></p>
                    <hr />
                </div>
        </header>
        <div class="container">
            <div class="box">
                <div class="row">
                    <div class="col-md-12">
                        <div class="well">
                            <div class="d-flex align-items-center justify-content-center">
                                <form method="POST" action="{{route('userdata.store')}}" class="col-sm-10 col-md-7 col-lg-6">@csrf
                                    <div class="mb-3">
                                        <label for="form-name" class="form-label">名前</label>
                                        <input type="text" class="form-control" name="name" placeholder="名前" id="form-name" required>
                                        <label for="form-tel">電話番号</label>
                                        <input type="tel" class="form-control" name="telephone" placeholder="電話番号"　id="form-tel">
                                        <label for="form-email">メールアドレス</label>
                                        <input type="email" class="form-control" name="email" placeholder="メールアドレス"　id="form-email">
                                    </div>
                                    <div class="container-fluid text-center">
                                        <button type="submit" class="btn btn-primary mb-3">登録</button>
                                        <p class="mb-0"><a href="{{ route('userdata.list') }}">{{ __('一覧に戻る') }}</a></p>
                                    </div>
                                </form>
                            </div>
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