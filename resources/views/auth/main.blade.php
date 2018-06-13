
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="SixInSix Platform">


    <title>SixInSix | Platform</title>

    <!-- vendor css -->
    <link href="../platform_assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../platform_assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../platform_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../platform_assets/lib/highlightjs/github.css" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="../platform_assets/css/katniss.css">
    <link rel="stylesheet" href="{{ asset('platform_assets/css/custom.css') }}" >
    @yield('custom-css')
</head>

<body>
    @yield('content')

    {{-- JS --}}

    <script src="../platform_assets/lib/jquery/jquery.js"></script>
    <script src="../platform_assets/lib/popper.js/popper.js"></script>
    <script src="../platform_assets/lib/bootstrap/bootstrap.js"></script>
    <script src="../platform_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../platform_assets/lib/moment/moment.js"></script>
    <script src="../platform_assets/lib/highlightjs/highlight.pack.js"></script>
    <script src="../platform_assets/js/katniss.js"></script>
    <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
    @yield('custom-js')
</body>
</html>
