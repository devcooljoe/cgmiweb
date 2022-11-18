<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ route('index') }}/style/style.css">
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    {{-- <script src="/build/assets/app.525f5899.css" defer></script>
   <link href="/build/assets/app.c5d9e6c4.js" rel="stylesheet"> --}}
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
                    <div class="cgmi___hamburger">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div class="cgmi___nav_links">
                        <ul>
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('about') }}">About Us</a></li>
                            <li><a href="{{ route('sermon') }}">Sermon</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li><a href="{{ route('book') }}">Library</a></li>
                            <li><a href="{{ route('donate') }}">Free Will Donation</a></li>
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
                    <a href="{{ route('contact') }}">Contact Us</a><br>
                    <a href="{{ route('book') }}">Library</a><br>
                    <a href="/">Notifications</a><br>
                    <a href="{{ route('donate') }}">Free will Donation</a>
                </div>
                <div class="col-12 col-md-4 col-sm-4 col-xs-12">
                    <p class=""><img class="cgmi___footer_logo" src="/images/logo.png" class="img img-response" alt=""></p>
                    <p>
                        26 Dele Kalujolu street,Enoma
                        Bus stop Ago Palace way Okota
                        Lagos.
                    </p>
                    <span>Mail: info@cgmiokota.org</span><br>
                    <span>Call: +234 9048580800</span>
                    <p class="mt-5 text-left">
                        <a target="_blank" href="https://www.facebook.com/cgmithewealthyplace"><img src="/images/Vector (1).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="https://www.instagram.com/cgmithewealthyplace"><img src="/images/Vector (2).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCNFQ8IJtmdhdCIJBB429nhQ"><img src="/images/Vector (3).png" class="cgmi___social" alt=""></a>
                        <a target="_blank" href="#"><img src="/images/Vector (4).png" class="cgmi___social" alt=""></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        count = 1;
        $("#prevButton").click(function() {
            if (count % 2 == 0) {
                $("#app-background").css("background-image",
                    "url('/images/WhatsApp Image 2022-11-05 at 9.35.21 AM.jpeg')");
                count++;
            } else {
                $("#app-background").css("background-image",
                    "url('/images/WhatsApp Image 2022-11-05 at 9.25.37 AM.jpeg')");
                count++;
            }
        });
        $("#nextButton").click(function() {
            if (count % 2 == 0) {
                $("#app-background").css("background-image",
                    "url('/images/WhatsApp Image 2022-11-05 at 9.35.21 AM.jpeg')");
                count++;
            } else {
                $("#app-background").css("background-image",
                    "url('/images/WhatsApp Image 2022-11-05 at 9.25.37 AM.jpeg')");
                count++;
            }
        });

        setInterval(() => {
            $("#nextButton").trigger('click');
        }, 7000);
        navCount = 0;
        $('.cgmi___hamburger').click(function() {
            if (navCount % 2 == 0) {
                console.log(navCount);
                $('.cgmi___nav_links').css('width', '70%');
                $('.cgmi___nav_links').css('padding', '10px');
                $('.cgmi___nav_links').css('box-shadow', '5px 0px 100px 50px rgba(0, 0, 0, 0.347)');
            } else {
                console.log(navCount);
                $('.cgmi___nav_links').css('width', '0px');
                $('.cgmi___nav_links').css('padding', '0px');
                $('.cgmi___nav_links').css('box-shadow', 'none');
            }
            navCount++;
        });

    </script>
</body>


</html>
