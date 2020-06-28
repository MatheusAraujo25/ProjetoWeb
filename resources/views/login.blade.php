<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
<div class="cont">
    <div class="form sign-in">
        <h2>Login</h2>
        <label>
            <span>E-mail</span>
            <input type="text" name="email">
        </label>
        <label>
            <span>Senha</span>
            <input type="password" name="password">
        </label>
        <button class="submit" type="button">Iniciar</button>
        <p class="forgot-pass"> Esqueceu sua senha?</p>
        <div class="social-media">
            <ul>

                <li><img src="{{URL::asset('/images/facebook.png')}}" alt="..."></li>
                <li><img src="{{URL::asset('/images/instagram.png')}}" alt="..."></li>
                <li><img src="{{URL::asset('/images/twitter.png')}}" alt="..."></li>
            </ul>
        </div>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img-text m-up">
                <h2>você é novo aqui?</h2>
                <p>Escreva-se e descubra diversas novidades, mude seu estilo de treino!</p>
            </div>
            <div class="img-text m-in">
                <h2>Já possui cadastro ?</h2>
                <p>Se você possui uma conta conecte-se!<br>Bem-Vindo de volta amigo! </p>
            </div>
            <div class="img-btn">
                <span class="m-up">cadastro</span>
                <span class="m-in">Login</span>
            </div>
        </div>
        <div class="form sign-up">
            <h2>Cadastro</h2>
            <label>
                <span>Nome</span>
                <input type="text" name="">
            </label>
            <label>
                <span>E-mail</span>
                <input type="email" name="">
            </label>
            <label>
                <span>Senha</span>
                <input type="password" name="">
            </label>
            <label>
                <span>Confirme sua senha</span>
                <input type="password" name="">
            </label>
            <button type="button" class="submit">Completar cadastro</button>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{ asset('js/login.js') }}"></script>
</body>
</html>
