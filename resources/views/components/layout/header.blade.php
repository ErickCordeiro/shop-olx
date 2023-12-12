<header>
    <div class="header-area">
        <a href="{{ route('home') }}" class="header-area-left">B7Store</a>
        @if (Auth::check())
            <div class="header-area-right">
                <a href="{{ route('myAccount') }}" class="my-account">
                    <img src="assets/icons/userIcon.png" />
                    Minha Conta
                </a>
                <a href="{{ route('logout') }}" class="my-account">
                    <svg width="24" style="margin-right: 8px; display: inline-block"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
                    </svg>

                    Sair
                </a>
                <a href="" class="announce-now">Anunciar agora →</a>
                <img class="menu-icon" src="assets/icons/menuIcon.png" alt="Menu" />
                <div class="menu-mobile">
                    <a href="myAccount.html" class="my-account-mobile">
                        <img src="assets/icons/userIcon.png" alt="Ícone do usuário" />
                        Minha Conta
                    </a>
                    <a class="my-account-mobile" href="/index.html"><img src="assets/icons/logoutIcon.png" /> Sair</a>
                </div>
            </div>
        @else
            <div class="header-area-right">
                <a href="{{ route('login') }}" class="my-account">
                    <img src="assets/icons/userIcon.png" />
                    Entrar
                </a>
                <a href="{{ route('register') }}" class="announce-now">Cadastre-se →</a>
                <img class="menu-icon" src="assets/icons/menuIcon.png" alt="Menu" />
                <div class="menu-mobile">
                    <a href="myAccount.html" class="my-account-mobile">
                        <img src="assets/icons/userIcon.png" alt="Ícone do usuário" />
                        Entrar
                    </a>
                    <a class="my-account-mobile" href="/index.html"><img src="assets/icons/logoutIcon.png" /> </a>
                </div>
            </div>
        @endif
    </div>
</header>
