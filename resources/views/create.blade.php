<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>create user data</title>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <h2>会員登録</h2>
        <form method="POST" action="{{route('userdata.store')}}">@csrf
            <div><label for="form-name"></label><input type="text" name="name" placeholder="名前" id="form-name" required>
            <div><label for="form-tel"></label><input type="tel" name="telephone" placeholder="電話番号"　id="form-tel">
            <div><label for="form-email"></label><input type="email" name="email" placeholder="メールアドレス"　id="form-email">
        </div>
    </div>
</div>
        <button type="submit">登録</button>
            <p>
            <a class=return href="{{ route('userdata.list') }}">{{ __('一覧に戻る') }}</a>
            </p>
        </form>
    </body>
</html>