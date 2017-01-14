<!DOCTYPE html>
 @yield('html')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Ziuxlab">
    <meta name="robots" content="index, follow">
    @yield('meta')

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" >
    <meta name="theme-color" content="#ffffff">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
     @include('layouts.style')
    @yield('css')
    <script type="application/ld+json">
    {
        "@context" : "http://schema.org",
        "@type" : "Organization",
        "name" : "lipocore hd",
        "url" : "https://www.lipocorehd.com",
        "sameAs" : [
            "https://twitter.com/elitepharmalabs",
            "https://www.facebook.com/ElitePharmaLabs/",
        ]
    }
    </script>
</head>

<body>
@include('layouts.header')
@yield('content')
@include('layouts.footer')
@include('layouts.scripts')
@yield('scripts')
</body>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700" onload="if(media!='all')media='all'">
</html>
