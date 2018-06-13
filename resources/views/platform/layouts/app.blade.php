
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


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
    <meta name="author" content="ThemePixels">


    <title>@yield('title') | SixInSix Platform</title>

    <!-- vendor css -->
    <link href="{{ asset('platform_assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('platform_assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('platform_assets/lib/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('platform_assets/lib/highlightjs/github.css') }}" rel="stylesheet">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="{{ asset('platform_assets/css/katniss.css') }}">
    <link rel="stylesheet" href="{{ asset('platform_assets/css/custom.css') }}" >
      <link href="{{ asset('crop/cropper.css') }}" rel="stylesheet">
      {{--<link href=" {{ asset('crop/main.css') }}" rel="stylesheet">--}}
      <style>
          .img-container {
              /* Never limit the container height here */
              max-width: 100%;
          }

          .img-container img {
              /* This is important */
              width: 100%;
          }
      </style>
      @yield('custom-css')
  </head>

<body>

    {{-- SIDEBAR --}}
    <div id="sidebar">
            @include('platform.partials.sidebar')

    </div>

    {{-- HEADER --}}
    <div id="header">
        @include('platform.partials.header')

    </div>




    {{-- MAIN --}}
    <main class="kt-mainpanel">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <div id="site-footer">
        @include('platform.partials.footer')
    </div>

    {{-- JS --}}
        {{--<script src="{{ asset('js/app.js') }}"></script>--}}
        <script src="{{ asset('platform_assets/lib/jquery/jquery.js') }}"></script>
        <script src="{{ asset('platform_assets/lib/popper.js/popper.js') }}"></script>
        <script src="{{ asset('platform_assets/lib/bootstrap/bootstrap.js') }}"></script>
        <script src="{{ asset('platform_assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js') }}"></script>
        <script src="{{ asset('platform_assets/lib/moment/moment.js') }}"></script>
        <script src="{{ asset('platform_assets/lib/highlightjs/highlight.pack.js') }}"></script>
        <script src="{{ asset('platform_assets/js/katniss.js') }}"></script>
        <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
        <script src="{{asset('platform_assets/js/stripe.js')}}"></script>
        <script src="{{ asset('crop/cropper.min.js') }}"></script>
        @yield('custom-js')
</body>
</html>
