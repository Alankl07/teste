<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/stilo.css')}}" rel="stylesheet">
    <script src="main.js"></script>
</head>
<body class="login">
    <div class="login2">
        <form action="process.php" method="POST">
            Usuario<br>
            <select name="selec">
                <option  name="selec" id="select"> ---</option>
                <option  name="selec" id="select"> Coordenador</option>
                <option  name="selec" id="select"> Minstro</option>
            </select><br>
            <label for="senha">Senha</label>
            <input name="senha" class="form-control" type="password" id="senha" size=40>
            <a href="recuperar" class="as">Esqueceu sua senha?</a>
            <a href="{{route('cadastro.create')}}" class="as1">Cadastrar-se</a>
            <button id="bt" class="btn btn-outline-light" size="20" type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>

