<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RPG</title>
 
    <style>
        * {
            margin: 0;
            padding: 0;
        }
 
        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
 
        .container {
            display: flex;
        }
 
        .container a div {
            width: 200px;
            height: 250px;
            background-color: #ddd;
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 10px;
        }
 
        .container a div img {
            width: 180px;
        }
 
        .container a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Escolha uma classe:</h1>
    <div class="container">
        <a href="/classes/guerreiro">
            <div>
                <img src="https://images.vexels.com/media/users/3/234375/isolated/preview/8f52cae05221eb0bbd97e04afa19764e-ilustracao-de-espada-de-ouro.png">
                Guerreiro
            </div>
        </a>
        <a href="/classes/arqueiro">
            <div>
                <img src="https://criticalhits.com.br/wp-content/uploads/2021/07/StalhrimB.png">
                Arqueiro
            </div>
        </a>
        <a href="/classes/mago">
            <div>
                <img src="https://i.pinimg.com/originals/d9/d0/ac/d9d0acb6c69ca4ffbf4137f27890b5d0.png">
                Mago
            </div>
        </a>
    </div>
</body>
</html>
<!--criação desse arquivo #06-->