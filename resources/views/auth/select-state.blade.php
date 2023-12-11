<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/loginSignUpStyle.css" />

    <title>B7Store - Finalize seu Cadastro</title>
</head>

<body>
    <a href="index.html" class="back-button">← Voltar</a>
    <div class="login-page">
        <div class="login-area">
            <h3 class="login-title">B7Store</h3>
            <div class="text-login">
                Selecione o seu estado e informe seu contato.
            </div>
            <form action="{{ route('state') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="name-area">
                    <div class="name-label">Estado</div>
                    <select name="state" required>
                        <option value="">Selecione um estado</option>
                        @foreach ($states as $state)
                            <option value="{{$state->id}}">{{$state->title}}</option>
                        @endforeach
                    </select>
                    @error('state')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <div class="email-area">
                    <div class="name-label">Contato</div>
                    <input type="text" name="contact" maxlength="11" placeholder="XX XXXXXXXXX" required>
                    @error('state')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>
                <button class="login-button">Selecionar</button>
            </form>
        </div>
    </div>
    <x-layout.footer />
</body>

</html>
