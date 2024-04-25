<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
</head>
<body>
    <header>
        <div class="header-logo">FashionablyLate</div>
        <form method="post">
            @csrf
            <button type="submit">register</button>
        </form>
    </header>
    <main>
        <div class="main-title">Login</div>
        <form class="form" action="/login" method="post">
            @csrf
            <input type="email" name="email" value="{{ old('email') }}" />
            <input type="password" name="password" />
        </form>
    </main>
</body>
</html>