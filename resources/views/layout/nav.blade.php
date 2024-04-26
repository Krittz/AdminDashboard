<div class="right-section">
    <div class="nav">
        <button id="menu-btn">
            <span class="material-icons-sharp">
                menu
            </span>
        </button>
        <div class="dark-mode">
            <span class="material-icons-sharp active">
                light_mode
            </span>
            <span class="material-icons-sharp">
                dark_mode
            </span>
        </div>

        <div class="profile">
            <div class="info">
                @auth
                    <p>Olá, <b>{{ Illuminate\Support\Str::ucfirst(Auth::user()->name) }}</b></p>

                @endauth
            </div>
            <div class="profile-photo">
                <img src="#">
            </div>
        </div>

    </div>
    <!-- End of Nav -->





</div>
