<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Esqueci minha senha</title>
  </head>

  <body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
      <div class="login-area">
        <h3 class="login-title">B7Store</h3>
        <div class="text-login">
          Escreva o seu e-mail de cadastro abaixo para recuperar a senha.
        </div>
        <form>
          <div class="email-area">
            <div class="email-label">E-mail</div>
            <input type="email" placeholder="Digite o seu e-mail" />
          </div>
         
          <button class="login-button">Recuperar senha</button>
        </form>
        <div class="register-area">
          Lembrou a sua senha? <a href="{{route('login')}}">Login</a>
        </div>
      </div>
    </div>
   <x-layout.footer />
  </body>
</html>
