<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="assets/myAccountStyle.css" />

    <title>B7Store - Minha Conta</title>
</head>

<body>
    <x-layout.header />
    <main>
        <div class="my-account-page">
            <div class="sidebar">
                <div class="sidebar-top">
                    <a href="{{ route('myAccount') }}" class="config"><img src="assets/icons/configIcon.png" />
                        Configurações</a>
                    <a href="/myAds.html"><img src="assets/icons/layersIonGray.png" /> Meus Anúncios</a>
                </div>
                <div class="sidebar-bottom">
                    <a href="{{ route('logout') }}"><img src="assets/icons/logoutIcon.png" /> Sair</a>
                </div>
            </div>
            <div class="profile-area">
                <h3 class="profile-title">Meu perfil</h3>
                <form>
                    <div class="name-area">
                        <div class="name-label">Nome</div>
                        <input type="text" placeholder="Digite o seu nome" value="{{$user->name}}" />
                    </div>
                    <div class="email-area">
                        <div class="email-label">E-mail</div>
                        <input type="email" placeholder="Digite o seu e-mail" value="{{$user->email}}"/>
                    </div>
                    <div class="email-area">
                        <div class="email-label">Contato</div>
                        <input type="text" placeholder="Digite o seu telefone/celular" value="{{$user->contact}}"/>
                    </div>
                    <div class="password-area">
                        <div class="password-label">Senha</div>
                        <x-form.password name="password" placeholder="Digite a sua senha" id="password" />
                        @error('password')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="state-area">
                        <div class="state-label">Estado</div>
                        <select class="states">
                            @foreach ($states as $state)
                                <option {{ $user->state_id == $state->id ? 'selected' : '' }}
                                    value="{{ $state->id }}">{{ $state->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="save-button">Salvar</button>
                </form>
            </div>
        </div>
    </main>
    <x-layout.footer />
</body>

</html>
