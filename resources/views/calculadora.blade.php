<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="/soma" method="post">
        @csrf
        <input type="number" name="num1" placeholder="Número 1">
        +
        <input type="number" name="num2" placeholder="Número 2">
        <input type="submit" value="Somar">
    </form>
</body>
</html>