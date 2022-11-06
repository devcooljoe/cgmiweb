<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ route('index') }}/style/style.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="/build/assets/app.525f5899.css" defer></script>
   <link href="/build/assets/app.c5d9e6c4.js" rel="stylesheet">
    @yield('title')
</head>

<body>
    <header>
        <div class=" 
        {{ (Session::get('page') == 'index' ? 'cgmi___landing_page' : '') }}
        {{ (Session::get('page') == 'about' ? 'cgmi___landing_page' : '') }}
        {{ (Session::get('page') == 'contact' ? 'cgmi___landing_page_contact' : '') }}
        {{ (Session::get('page') == 'book' ? 'cgmi___landing_page_book' : '') }}
        {{ (Session::get('page') == 'sermon' ? 'cgmi___landing_page_sermon' : '') }} ">
            <div class="cgmi___opacity_black">
                <nav class="cgmi___nav">
                    <div class="cgmi___nav_icon">
                        <img src="/images/logo.png" alt="" class="cgmi___nav_logo img img-responsive">
                    </div>
                    <div class="cgmi___nav_links">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/sermon">Sermon</a></li>
                            <li><a href="/contact">Contact Us</a></li>
                            <li><a href="/book">Library</a></li>
                            <li><a href="/donate">Free Will Donation</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="cgmi___landing_page_title">
                    @yield('headerContent')
                </div>
            </div>
        </div>
    </header>
    @yield('content')
<footer>
    <div class="cgmi___footer_div">
        <div class="row">
            <div class="col-12 col-md-5 col-sm-5 col-xs-12">
                <h3>Sign Up for Newsletter</h3>
                <p>
                    To stay up to date with the
                    Wealthy Place CGMI Okota,
                    sign up for our e-mail newsletter!
                </p>
                <br>
                <form action="#" method="post" autocomplete="off">
                    <input type="text" name="name" class="cgmi_form_field_1"
                        placeholder="Enter your name">
                    <input type="text" name="name" class="cgmi_form_field_1"
                        placeholder="Enter your email address">
                    <input type="submit" value="Sign Up" class="cgmi_form_button_1">
                </form>
            </div>
            <div class="col-12 col-md-3 col-sm-3 col-xs-12">
                <h3>Site Map</h3>
                <a href="#">About</a><br>
                <a href="#">Sermons</a><br>
                <a href="#">Contact Us</a><br>
                <a href="#">Library</a><br>
                <a href="#">Notifications</a><br>
                <a href="#">Free will Donation</a>
            </div>
            <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                <p class="text-center"><img src="/images/logo.png" class="img img-response" alt=""></p>
                <p>
                    26 Dele Kalujolu street,Enoma
                    Bus stop Ago Palace way Okota
                    Lagos.
                </p>
                <span>Mail: info@cgmiokota.org</span><br>
                <span>Call: +234 9048580800</span>
                <p class="mt-5 text-left">
                    <a href="#"><img src="/images/Vector (1).png" class="cgmi___social"
                            alt=""></a>
                    <a href="#"><img src="/images/Vector (2).png" class="cgmi___social"
                            alt=""></a>
                    <a href="#"><img src="/images/Vector (3).png" class="cgmi___social"
                            alt=""></a>
                    <a href="#"><img src="/images/Vector (4).png" class="cgmi___social"
                            alt=""></a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>

</html>
