<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{ route('index') }}/style/style.css">
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .cgmi___dashboard {
            display: flex;
            width: 100%;
            justify-content: right;
        }

        .cgmi___dashboard_nav {
            padding-left: 50px;
            padding-right: 50px;
        }
        .card-header {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <title>Dashboard</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light cgmi___dashboard_nav">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse cgmi___dashboard" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><button class="dropdown-item btn-link" type="submit">Logout</button></li>
                            </ul>
                        </form>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
</body>

</html>
