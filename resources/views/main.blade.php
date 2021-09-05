<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>DC Comics @yield('title')</title>
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
</head>
<body>
    <div class="container">
        <header>
            @include('header')
        </header>
            <main>
                @yield('content')
            </main>
        <Footer>
            @include('footer')
        </Footer>
    </div>
</body>
</html>