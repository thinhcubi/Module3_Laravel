<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<form method="post" action="/calculator">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Product Description">
    </p>
    <p>
        <input type="text" name="price" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="discount" placeholder="Discount Percent">
    </p>
    <button type="submit" name="submit">Ok</button>
</form>
</body>
</html>
