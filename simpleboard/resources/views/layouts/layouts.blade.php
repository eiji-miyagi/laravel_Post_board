<html>
<head>
    <title>@yield('title')</title>
    <meta namae="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylessheet">
</head>
<body>
 <div class="container">
 @yield('content')
 </div>
 <script src="{{ asset('js/app.js') }}"></script>
</body>
</hyml>
