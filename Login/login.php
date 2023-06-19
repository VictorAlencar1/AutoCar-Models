<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="../Images/Logo.png"/>
    <title>AutoCar Login</title>
    <script src="login.js">
    </script>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça o Login<br><span>E venha conhecer os carros!</span></h1>
            <img class="left-login-image" src="../images/animação-carro.svg" alt="Imagem-Animada">
        </div>
        <div class="right-login">
            <div class="card-login">
                <form action="../TelaInicial/processa.php" method="post">
                <h1>AutoCar</h1>
                <h1 id="vendas">Models</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>

                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>

                <button class="btn-login" onclick="abrirAlerta()" type="submit">Login</a></button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>