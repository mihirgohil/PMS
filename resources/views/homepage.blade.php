<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="true">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PMS') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{  asset('css/home-page.css') }} " rel="stylesheet">
</head>
<body>
        <div class="container">
            <div class="page-header">
            <h1>
             <strong>Welcome to Chimanbhai Patel Post Graduate Institute of <br> Computer Applications[CPPGICA] Placement Program.</strong>
            </h1>
            </div>
        </div>
        <div class="container container-sub">
            <div class="row justify-content-center">
            <!-- card -->
            <div class="col-md-6 col-lg-4">
                <!-- link for page -->
                <a href="#" class="card-link">
                <div class="card">
                    <!-- static images are stored under public/images -->
                    <img src="/images/company_icon_white.png" class="card-img-top" alt="Can't load image">
                    
                    <div class="card-body" style="text-align: center">
                        <h3 class="card-title"><b>Company</b></h3>
                    </div>
                </div>
                </a>
            </div>
            <!-- card -->
            <div class="col-md-6 col-lg-4">
                <!-- link for page -->
                <a href="studentboom" class="card-link">
                <div class="card">
                    <!-- static images are stored under public/images -->
                    <img src="/images/college_logo.png" class="card-img-top" alt="Can't load image">
                    <div class="card-body" style="text-align: center">
                        <h3 class="card-title"><b>College</b></h3>
                    </div>
                </div>
                </a>
            </div>
            <!-- card -->
            <div class="col-md-6 col-lg-4">
                
                <!-- link for page -->
                <a href="{{ route('login') }}" class="card-link">
                <div class="card">
                    <!-- static images are stored under public/images -->
                    
                    <img src="/images/student_icon_white.png" class="card-img-top" alt="Can't load image">
                    <div class="card-body" style="text-align: center">
                        <h3 class="card-title"><b>Student</b></h3>
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
</body>
</html>
