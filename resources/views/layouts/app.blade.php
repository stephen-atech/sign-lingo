<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <div id="show_menuitems" class="my-menu">
        <div class="menu-box">
            <span>
                <i onclick="hide_menu()" class="flaticon-cancel"></i>
            </span>
            <ul>
                <li><a onclick="hide_menu()" href="{{ route('profile') }}">Profile</a></li>
                <li>
                    <a href="#"
                        onclick="event.preventDefault(); hide_menu(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>
        </div>
    </div>

    <section id="home">
        <header>
            <div class="container">
                <div class="main-nav">
                    <div class="logo">
                        <a href="{{ route('home') }}" style="text-decoration: none;">
                            <h2 style="color: white;">Sign<span style="color: rgb(52, 239, 176);">Lingo</span></h2>
                        </a>
                    </div>
                    <div onclick="show_menu()" class="my-toogle">
                        <span><i class="flaticon-menu"></i></span>
                    </div>
                </div>
            </div>
            @yield('content')
        </header>
    </section>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
