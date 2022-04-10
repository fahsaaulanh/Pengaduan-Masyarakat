<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('pengaduan_masyarakat/css/sidebar-style.css') }}">


    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard Sidebar Menu</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{asset('pengaduan_masyarakat/images/f-icon3.png') }}" alt="">
                </span>

                <div class=" text logo-text mb-2">
                    <span class="name">Web</span>
                    <span class="profession">E-Dumas</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">


                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>


                <li class="">
                    <a href="/pengaduan">
                        <i class='bx bx-pie-chart-alt icon'></i>
                        <span class="text nav-text">Pengaduan</span>
                    </a>
                </li>


                <li class="">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn"><i class='bx bx-log-out icon'></i></button>
                    </form>
                </li>



            </div>
        </div>

    </nav>

    <section class="home">
        @yield('content')




    </section>






    <script src="{{asset('pengaduan_masyarakat/js/script.js') }}"></script>

</body>

</html>
