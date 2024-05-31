<html class="html">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/master.css">
        <link rel="stylesheet" href="/css/{{ $active }}.css">
    </head>
    <body>
        <div class="nav-menu" id="menu">
            <a class="nav-menu__nav-item" href="{{ url('/') }}">Home</a>
            <a class="nav-menu__nav-item" href="{{ url('/over-mij') }}">Over mij</a>
            <a class="nav-menu__nav-item" href="{{ url('/mijn-werk') }}">Mijn werk</a>
            <a class="nav-menu__nav-item" href="{{ url('/contact') }}">Contact</a>
        </div>
        @hasSection('header')
            @yield('header')
        @endif
        @sectionMissing('header')
            <header class="master-header">
                <h2 class="master-header__subtitle">Jochem de Wit - Porfolio website</h2>
                <div class="master-header__master-bar">
                    <h1 class="master-bar__title">{{ $title }}</h1>
                    <div class="master-bar__master-nav">
                        <div class="hamburger-menu" id="nav">
                            <svg class="ham hamRotate ham" id="navIcon" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                                <path
                                    class="line top"
                                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                                <path
                                    class="line middle"
                                    d="m 30,50 h 40" />
                                <path
                                    class="line bottom"
                                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
                            </svg>
                        </div>
                    </div>
                </div>
            </header>
        @endif
        @yield('main')
        <footer class="footer">
            <div class="footer__footer-content">
                <a target="_blank" href="https://github.com/26278" class="footer-content__social">
                    <svg class="" height="32" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C13.71 14.53 16 11.53 16 8C16 3.58 12.42 0 8 0Z"></path>
                    </svg>
                    Bekijk mijn GitHub
                </a>
                <a target="_blank" href="https://www.linkedin.com/in/jochem-de-wit/" class="footer-content__social">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path>
                    </svg>
                    Vind mij op LinkedIn
                </a>
            </div>
        </footer>
    </body>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>
    @yield('js')
</html>