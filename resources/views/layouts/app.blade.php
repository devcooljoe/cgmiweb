<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="/style/style.css">
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon">
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @yield('title')
</head>

<body>
    <header>
        <div id='app-background'
            class="
        {{ Session::get('page') == 'index' ? 'cgmi___landing_page' : '' }}
        {{ Session::get('page') == 'about' ? 'cgmi___landing_page' : '' }}
        {{ Session::get('page') == 'contact' ? 'cgmi___landing_page_contact' : '' }}
        {{ Session::get('page') == 'book' ? 'cgmi___landing_page_book' : '' }}
        {{ Session::get('page') == 'sermon' ? 'cgmi___landing_page_sermon' : '' }}
        {{ Session::get('page') == 'donate' ? 'cgmi___landing_page_donate' : '' }} ">
            <div class="cgmi___opacity_black">
                <nav class="cgmi___nav">
                    <div class="cgmi___nav_icon">
                        <a href="{{ route('index') }}">
                            <img src="/images/logo.png" alt="" class="cgmi___nav_logo img img-responsive">
                        </a>
                    </div>
                    <div class="cgmi___hamburger hamburger_handle_click">
                        <div class="hamburger_handle_click"></div>
                        <div class="hamburger_handle_click"></div>
                        <div class="hamburger_handle_click"></div>
                    </div>
                    <div class="cgmi___nav_links">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('sermon') }}">Sermon</a></li>
                            <li><a href="{{ route('audio-sermon') }}">Audio Messages</a></li>
                            <li><a href="{{ route('pictures') }}">Gallery</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('book') }}">Library</a></li>
                            <li><a href="{{ route('donate') }}">Free Will Donation</a></li>
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @else
                                @if (auth()->user()->admin())
                                    <li><a href="{{ route('home') }}">Dashboard</a></li>
                                @endif
                            @endguest
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
                    <form action="{{ route('newsletter.store') }}" method="post" autocomplete="off">
                        @csrf
                        <input type="text" name="name" class="cgmi_form_field_1" placeholder="Enter your name">
                        <input type="text" name="email" class="cgmi_form_field_1"
                            placeholder="Enter your email address">
                        <input type="submit" value="Sign Up" class="cgmi_form_button_1">
                    </form>
                </div>
                <div class="col-12 col-md-3 col-sm-3 col-xs-12">
                    <h3>Site Map</h3>
                    <a href="{{ route('about') }}">About</a><br>
                    <a href="{{ route('sermon') }}">Sermons</a><br>
                    <a href="{{ route('audio-sermon') }}">Audio Messages</a><br>
                    <a href="{{ route('pictures') }}">Gallery</a><br>
                    <a href="{{ route('contact') }}">Contact Us</a><br>
                    <a href="{{ route('book') }}">Library</a><br>
                    <a href="/">Notifications</a><br>
                    <a href="{{ route('donate') }}">Free will Donation</a>
                    @guest
                        <a href="{{ route('login') }}">Login</a>
                    @endguest
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <p class=""><img class="cgmi___footer_logo" src="/images/logo.png" class="img img-response"
                            alt=""></p>
                    <p>
                        26 Dele Kulajolu street, Enoma
                        Bus stop Ago Palace way Okota
                        Lagos.
                    </p>
                    <span>Mail: info@cgmiokota.org</span><br>
                    <span>Call: +234 9048580800</span>
                    <p class="mt-5 text-left">
                        <a target="_blank" href="https://www.facebook.com/cgmithewealthyplace"><img
                                src="/images/Vector (1).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="https://www.instagram.com/cgmithewealthyplace"><img
                                src="/images/Vector (2).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCNFQ8IJtmdhdCIJBB429nhQ"><img
                                src="/images/Vector (3).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="https://twitter.com/cgmglobal"><img src="/images/Vector (4).png"
                                class="cgmi___social" alt=""></a>
                    </p>
                </div>
            </div>
            <br>
            <p class="text-center" style="font-size: 14px;">©
                <script>
                    document.write(new Date().getFullYear())
                </script> CGMI Okota. Designed by Forah Technology.
            </p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        var banners = JSON.parse('<?php echo $heroBannerJson ?? '{}'; ?>');

        if (banners.length != undefined) {
            setTimeout(function() {
                document.getElementById("app-background").style.backgroundImage = `url('/${banners[0].image}')`;
                var carousel = new Carousel('.carousel');
            }, 1);

            var count = 0;
            document.getElementById("prevButton")?.addEventListener('click', function() {
                if (count - 1 < 0) {
                    count = banners.length - 1;
                } else {
                    count--;
                }
                document.getElementById("app-background").style.backgroundImage = `url('/${banners[count].image}')`;
            });

            document.getElementById("nextButton")?.addEventListener('click', function() {
                if (count + 1 > banners.length - 1) {
                    count = 0;
                } else {
                    count++;
                }
                document.getElementById("app-background").style.backgroundImage = `url('/${banners[count].image}')`;
            });

            setInterval(function() {
                document.getElementById("nextButton")?.click();
            }, 7000);
        }

        var opened = false;
        document.body.addEventListener('click', function(event) {
            if (!event.target.matches('.hamburger_handle_click')) {
                if (opened) {
                    var navLinks = document.querySelector('.cgmi___nav_links');
                    navLinks.style.width = '0px';
                    navLinks.style.padding = '0px';
                    navLinks.style.boxShadow = 'none';
                    opened = false;
                }
            } else {
                if (opened) {
                    var navLinks = document.querySelector('.cgmi___nav_links');
                    navLinks.style.width = '0px';
                    navLinks.style.padding = '0px';
                    navLinks.style.boxShadow = 'none';
                    opened = false;
                } else {
                    var navLinks = document.querySelector('.cgmi___nav_links');
                    navLinks.style.width = '70%';
                    navLinks.style.padding = '10px';
                    navLinks.style.boxShadow = '5px 0px 100px 50px rgba(0, 0, 0, 0.347)';
                    opened = true;
                }
            }
        });
    </script>

</body>


</html>
