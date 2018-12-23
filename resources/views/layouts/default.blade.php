<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Li Chen - Li Chen\'s Blog')</title>
    <link rel="icon" href="{{asset('storage/images/title-icon.png')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class='container'>        
        @yield('content')
    </div>
</body>
</html>