<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
		<img src="{{ asset('images/default-logo.png') }}"  height="40px" width="40px" />
		<span class="ml-2">{{ config('app.name') }}</span>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="{{ auth()->user()->avatar }}" class="img-avatar" alt="{{ auth()->user()->email }}">
                <span class="d-md-down-none">{{ auth()->user()->name }}</span>
            </a>
        </li>
    </ul>

    <ul class="nav navbar-nav ml-auto"></ul>

    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>

    <a class="navbar-toggler logout-btn" href="#" title="Logout">
        <i class="fas fa-sign-out-alt"></i>
    </a>

</header>
