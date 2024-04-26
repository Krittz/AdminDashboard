<div class="sidebar">
    <a href="{{ route('home') }}" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>Cr</span>An</div>
    </a>
    <ul class="side-menu">
        <li><a href="{{ route('home') }}"><i class="bx bxs-dashboard"></i>Painel</a></li>
        <li><a href="#"><i class="bx bx-store"></i>Compras</a></li>
        <li><a href="{{ route('animais') }}"><i class="bx bxs-dog"></i>Animais</a></li>
        <li><a href="#"><i class="bx bx-color-fill"></i>Produção</a></li>
        <li><a href="#"><i class="bx bx-analyse"></i>Orçamentos</a></li>
    </ul>
    <ul class="side-menu">
        <li>
            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
                <button type="submit" style="display: none;"></button>
            </form>

            <a href="#" class="logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
            <i class="bx
                bx-log-out-circle"></i>
            Logout
            </a>
        </li>
    </ul>
</div>


<div class="sidebar">
    <a href="{{ route('home') }}" class="logo">
        <i class="bx bx-code-alt"></i>
        <div class="logo-name"><span>Cr</span>An</div>
    </a>
    <ul class="side-menu">
        <li @if (request()->routeIs('home')) class="active" @endif>
            <a href="{{ route('home') }}"><i class="bx bxs-dashboard"></i>Painel</a>
        </li>
        <li @if (request()->routeIs('animais')) class="active" @endif>
            <a href="{{ route('animais') }}"><i class="bx bxs-dog"></i>Animais</a>
        </li>
        <li @if (request()->routeIs('compras')) class="active" @endif>
            <a href="#"><i class="bx bx-store"></i>Compras</a>
        </li>
        <li @if (request()->routeIs('producao')) class="active" @endif>
            <a href="#"><i class="bx bx-color-fill"></i>Produção</a>
        </li>
        <li @if (request()->routeIs('orcamentos')) class="active" @endif>
            <a href="#"><i class="bx bx-analyse"></i>Orçamentos</a>
        </li>

    </ul>
    <ul class="side-menu">
        <li>
            <form action="{{ route('logout') }}" id="logout-form" method="POST">
                @csrf
                <button type="submit" style="display: none;"></button>
            </form>
            <a href="#" class="logout"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();" />
            <i class="bx bx-log-out-circle"></i>
            Logout
            </a>
        </li>
    </ul>
</div>
