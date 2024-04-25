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
    <a href="#">
        <span class="material-icons-sharp">
            dashboard
        </span>
        <h3>Dashboard</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            person_outline
        </span>
        <h3>Users</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            receipt_long
        </span>
        <h3>History</h3>
    </a>
    <a href="#" class="active">
        <span class="material-icons-sharp">
            insights
        </span>
        <h3>Analytics</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            mail_outline
        </span>
        <h3>Tickets</h3>
        <span class="message-count">27</span>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            inventory
        </span>
        <h3>Sale List</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            report_gmailerrorred
        </span>
        <h3>Reports</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            settings
        </span>
        <h3>Settings</h3>
    </a>
    <a href="#">
        <span class="material-icons-sharp">
            add
        </span>
        <h3>New Login</h3>
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
