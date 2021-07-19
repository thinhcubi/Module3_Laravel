<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dictionary</title>
</head>
<body>
<form method="post" action="/dictionary">
    @csrf
    <p>
        <input type="text" name="english" placeholder="input">
    </p>
    <p>
        <button type="submit" name="submit">Dịch</button>
    </p>
</form>

</body>
</html>
