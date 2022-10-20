<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app,name', 'Laravel')}}</title>

    {{-- resset.css --}}
    <link rel="stylesheet" href="{{ asset('css/resset.css') }}">

    
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;900&display=swap" rel="stylesheet">
    
</head>

<body>
    <header>
        <div class="container">
            <img src="{{ asset('img/bottok_logo_white.png') }}" alt="BottoKのロゴ">
        </div>
    </header>
    
    <div class="content">
        @yield('content')
    </div>
    
    <footer>
        <div class="footer-container">
            <div class="left">
                <p>株式会社 BottoK</p>
                <p>福岡県福岡市博多区祇園町8-13 1F The Company 内</p>
                <p>Tel: 050-8881-6590</p>
            </div>
            <div class="right">
                <a href="">サービス</a>
                <a href="">会社概要</a>
                <a href="">お問合せ</a>
            </div>
        </div>
        <p>©️ 2022 BottoK.inc</p>
    </footer>
    
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
    {{-- chart.js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
    {{-- jQuery.inview --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    {{-- html2canvas --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    {{-- 自作js --}}
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>