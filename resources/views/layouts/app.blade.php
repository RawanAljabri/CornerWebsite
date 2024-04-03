<!-- User static structre -->
<!-- NAV FOOTER -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Corner Website</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: cairo;
            list-style: none;
            text-decoration: none;
            font-family: "Noto Kufi Arabic", sans-serif;

        }


        header {
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 10%;
            background-color: #fff;
        }

        .logo img {
            max-width: 120px;
            height: auto;
        }

        .navmenu {
            display: flex;
            list-style: none;

        }

        .navmenu a {
            color: #4b5552;
            font-size: 13px;
            text-transform: capitalize;
            padding: 10px 20px;
            font-weight: 400;
            transition: all .42s ease;
        }

        .navmenu a:hover {
            color: #979694;
        }

        .nav-icon {
            display: flex;
            align-items: center;
        }

        .nav-icon i {
            margin-right: 20px;
            color: #4b5552;
            font-size: 20px;
            font-weight: 400;
            transition: all .42s ease;
        }

        .nav-icon i:hover {
            transform: scale(1.1);
            color: #979694;
        }

        #menu-icon {
            font-size: 22px;
            color: #4b5552;
            cursor: pointer;
        }

        section {
            padding: 5% 10%;
        }

        .main-home {
            width: 100%;
            height: 100vh;
            background-image: url('/assets/images/header2.svg');
            background-size: cover;
            background-repeat: no-repeat;
            display: flex;


        }

        .main-text {
            max-width: 600px;
            align-items: center;
            margin-top: 20%;

        }

        .main-text h5 {
            font-size: 18px;
            margin-bottom: 10px;


        }

        .main-text h1 {
            font-size: 30px;
            margin-bottom: 20px;

        }

        .main-text p {
            font-size: 16px;
            margin-bottom: 30px;



        }

        .main-btn {
            background-color: #4b5552;
            color: white;
            padding: 15px 45px;
            font-size: 18px;
            transition: 0.3s ease;
        }

        .categories {
            margin-top: 50px;
            margin-bottom: 30px;
            text-align: center;

        }

        .categories ul {
            list-style: none;
            padding: 0;

        }

        .categories ul li {
            display: inline-block;
            margin: 0 10px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 8px 16px;
        }

        .categories ul li a {
            text-decoration: none;
            color: #4b5552;
            font-weight: 500;
            font-size: 15px;
            transition: color 0.3s;
        }

        .categories ul li a:hover {
            color: #979694;
        }

        .products {
            margin-left: 0.5%;
            margin-top: 50px;
            display: grid;
            gap: 4rem;
            grid-template-columns: repeat(auto-fit, minmax(250px, auto));
        }

        .row {
            position: relative;
            transition: all .40s;
        }

        .row img {
            width: 100%;
            height: 60%;
            transition: all .40s;
            margin-bottom: 15px;
        }

        .cart-btn {
            background-color: #4b5552;
            color: white;
            font-size: 18px;
            transition: 0.3s ease;
            margin-top: 15px;
            margin-bottom: 15px;
            border-radius: 15px;
            padding: 4px 30px;
            float: right;
        }

        .details-btn {
            background-color: #979694;
            color: #fff;
            font-size: 18px;
            transition: 0.3s ease;
            margin-top: 15px;
            margin-bottom: 15px;
            border-radius: 15px;
            padding: 4px 30px;
            float: right;
        }

        .cart-btn:hover {
            background-color: #979694;
        }
        .details-btn:hover {
            background-color: #4b5552;
        }

        .footer {
            background-color: #dbdad8;
            color: #4b5552;
            padding: 30px 0;
            margin-top: 30px;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            justify-content: space-between;
            align-items: center;
        }

        .footer-links ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-bottom {
            margin-top: 20px;
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>

<body dir="{{(session()->get('locale') == 'ar' ? 'rtl' : 'ltr')}}">
    <!-- NAV -->
    <header>
        <a href="#" class="logo"> <img src="\assets/images/brand.svg"></a>

        <ul class="navmenu">
            <li><a href="{{route('Shopping')}}">{{__('message.Home')}}</a></li>
            <li><a href="#categories">{{__('message.Shop')}}</a></li>
            <li><a href="#footer">{{__('message.Contact')}}</a></li>
            <li><a class="dropdown-item" href="{{ url('language/ar') }} "
                    style="font-weight: 600;">{{__('message.Arabic')}} <img src="\assets/images/ksa.png"
                        class="rounded-circle ml-2" width="15" height="15" alt=""></a></li>
            <li><a href="{{ url('language/en') }}" style="font-weight: 600;">{{__('message.English')}} <img
                        src="\assets/images/usa.png" class="rounded-circle" width="15" height="15" alt=""></a></li>

        </ul>



        <div class="nav-icon">
            <div>
                <a href="#"> <i class="bx bx-search"> </i></a>
                <a href="#"> <i class="bx bx-user"> </i></a>
                <a href="#"><span style="position:fixed; margin-left: 20px; color: crimson">{{Session::get('count')}}</span><i class="bx bx-cart"></i></a>
                <a href="#"> <i class="bx bx-menu"> </i></a>

            </div>
    </header>



   


    <main class="py-4">
        @yield('content')
    </main>
    <!-- FOOTER -->
    <footer class="footer" id="footer">
        <div class="footer-container">

            <div class="footer-links">
                <ul>
                    <li><i class="fa fa-instagram"></i></li>
                    <li><i class="fa fa-twitter"></i></li>
                    <li><i class="fa fa-google-plus "></i></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Corner. All rights reserved</p>
        </div>
    </footer>
</body>

</html>