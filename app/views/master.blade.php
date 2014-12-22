<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page_tittle')</title>
    <link rel="stylesheet" href="styles/css/styles.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
    <body>
    @include('partials.nav')


    @yield('content')

    <footer>

    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    @yield('script')
    </footer>
    </body>
</html>