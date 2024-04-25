<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>
<body>
    <form action="" method="">
        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
        <input type="radio" name="gender" value="{{ $contact['gender'] }}" readonly />
        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
        <input type="tell" name="tell" value="{{ $contact['tell'] }}" readonly />
        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
        <select name="category" >
            <option value="{{ $contact['building'] }}" readonly></option>
        </select>
        <input type="textarea" name="detail" value="{{ $contact['detail'] }}" readonly />
    </form>
</body>
</html>