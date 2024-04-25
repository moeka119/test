<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header>
        <div class="header-logo">FashionablyLate</div>
    </header>
    <main>
        <div class="main-title">Contact</div>
        <form method="post">
            @csrf
            <label>お名前<span>※</span><input type="text" name="first_name" placeholder="例: 山田"/>
            <input type="text" name="last_name" placeholder="例: 太郎"/></label><br />

            <label>性別<span>※</span><input type="radio" id="man" name="gender"/>
            <label for="man">男性</label>
            <input type="radio" id="woman"/>
            <label for="woman">女性</label>
            <input type="radio" id="others"/>
            <label for="others">その他</label></label><br />

            <label>メールアドレス<span>※</span><input type="email" name="email" placeholder="例: test@example.com"/></label><br />

            <label>電話番号<span>※</span><input type="tell" name="tell" placeholder="080"/> -
            <input type="tell" placeholder="1234"> -
            <input type="tell" placeholder="5678"></label><br />
            
            <label>住所<span>※</span><input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3"/></label><br />

            <label>建物名<input type="text" name="building" placeholder="例: 千駄ヶ谷マンション101"/></lavel><br />

            <label>お問い合わせの種類<span>※</span><select name="category" >
                <option value="" disabled selected>選択してください</option>
            </select></label><br />

            <label>お問い合わせ内容<span>※</span><input type="textarea" name="detail" placeholder="お問い合わせ内容をご記載ください"/></label><br />
            <button class="submit" type="submit">確認画面</button>
        </form>
    </main>
</body>
</html>