<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>
<body>
    <header>
        <div class="header-logo">FashionablyLate</div>
        <form action="/login" method="post">
            @csrf
            <button type="submit">login</button>
        </form>
    </header>
    <main>
        <div class="main-title">Register</div>
        <form class="form" action="" method="post">
            @csrf
            <input type="text" name="name" value="{{ old('name') }}" />
            <input type="email" name="email" value="{{ old('email') }}" />
            <input type="password" name="password" />
            <input type="password" name="password_confirmation" />
        </form>
    </main>
</body>
</html>