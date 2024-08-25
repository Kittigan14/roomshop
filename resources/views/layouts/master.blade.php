<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}">
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('vendor/toastr/toastr.min.js') }}"></script>
    <title>@yield('title', 'Rooms | จำหน่ายของแต่งห้อง')</title>
</head>

<body>

    <div class="container" id="container">
        <nav class="navbar navbar-default navbar-static-top">

            <div class="navbar-header">
                <a href="" class="navbar-brand"> Rooms </a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#">หน้าแรก</a></li>
                    <li><a href="#">ข้อมูลสินค้า</a></li>
                    <li><a href="#">ข้อมูลประเภทสินค้า</a></li>
                    <li><a href="#">รายงาน</a></li>
                </ul>
            </div>

        </nav> @yield('content')
    </div>

    @if(session('msg'))
        @if(session('ok'))
            <script> toastr.success("{{ session('msg') }}") </script>
        @else
            <script> toastr.error("{{ session('msg') }}") </script>
        @endif
    @endif

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
