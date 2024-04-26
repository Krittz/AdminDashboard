<div class="toggle">
    <div class="logo">
        <img src="#>
        <h2>Asmr<span class="danger">Prog</span></h2>
    </div>
    <div class="close" id="close-btn">
        <span class="material-icons-sharp">
            close
        </span>
    </div>
</div>

<div class="sidebar">
    <a href="{{ route('home') }}">
        <span class="material-icons-sharp">
            dashboard
        </span>
        <h3>Painel</h3>
    </a>
    <a href="{{ route('animais') }}">
        <span class="material-icons-sharp">
            pets
        </span>
        <h3>Animais</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            local_drink
        </span>
        <h3>Produção</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            article
        </span>
        <h3>Relatórios</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            shopping_cart
        </span>
        <h3>Compras</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            inventory
        </span>
        <h3>Orçamentos</h3>
    </a>

    <a href="#">
        <span class="material-icons-sharp">
            settings
        </span>
        <h3>Configurações</h3>
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" style="display: none;"></button>
    </form>

    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <span class="material-icons-sharp">
            logout
        </span>
        <h3>Logout</h3>
    </a>
</div>
