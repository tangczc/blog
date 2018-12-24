<!DOCTYPE html>
<html>
<head>
    <title>@yield('title','Li Chen - Li Chen\'s Blog')</title>
    <link rel="icon" href="https://blog-image-1258135583.cos.ap-chengdu.myqcloud.com/title-icon.png?q-sign-algorithm=sha1&q-ak=AKIDqgo2qc41CpYm9GWbzalYdbY4Ds7kgnIU&q-sign-time=1545619875;1545621675&q-key-time=1545619875;1545621675&q-header-list=&q-url-param-list=&q-signature=2888d66a3b174d4318bc2639b3e11c5280c2caad&x-cos-security-token=3e839b1e311e8391e6c872aba03e68c1b3663b63100011" type="image/x-icon"/>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts._header')
    <div class='container'>        
        @yield('content')
    </div>
</body>
</html>