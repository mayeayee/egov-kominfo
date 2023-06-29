<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
title tag
-->
    <title>Dinas Komunikasi dan Informatika Kabupaten Magetan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
favicon
-->
    <link rel="apple-touch-icon" sizes="180x180" href="/asset/images/Kominfo3.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/asset/images/Kominfo3.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/asset/images/Kominfo3.png">
    <link rel="manifest" href="/publik/assets/images/favicon/site.webmanifest">

    <!--
stylesheets
-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/publik/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/publik/assets/css/glightbox.min.css">
    <link rel="stylesheet" href="/publik/assets/css/all.min.css">
    <link rel="stylesheet" href="/publik/assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="/publik/assets/css/overlay-scrollbars.min.css">
    <link rel="stylesheet" href="/publik/assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="/publik/assets/css/style.css">
</head>

<body>

    <div class="page-header-wrapper " style="position: unset;">
        <div class="page-header-inner">
            <div class="container ">
                <div class="row">
                    <div class="col">

                    </div>
                    <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-0 col-10 offset-0">

                        <div class="contact-form drop-shadow-2">
                            <div class="contact-form-wrapper">
                                <div class="section-heading section-heading-2 center">
                                    <div class="sub-heading c-green upper ls-1">
                                        <img class=" h-10" src="/asset/images/Kominfo.png" style="height: 85px"
                                            alt="">
                                    </div>

                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-floating">
                                        <input class="input form-control" id="email" type="email"
                                            type="text" placeholder="Email" name="email"
                                            value="{{ old('email') }}"  autocomplete="email" autofocus>
                                        <label for="name-field">Email</label>

                                    </div>

                                    <div class="form-floating">

                                        @error('email')

                                                <strong style="margin-left: 10px"class="text ml-8 text-danger">{{ $message }}</strong>

                                        @enderror
                                    </div>
                                    <div class="form-floating">
                                        <input class="input form-control" id="password" type="password"
                                            type="password" placeholder="Email address" name="password" 
                                            autocomplete="current-password">
                                        <label for="email-field">Password
                                        </label>

                                    </div>

                                    <div class="form-floating">

                                        @error('password')

                                                <strong style="margin-left: 10px" class="text text-danger">{{ $message }}</strong>

                                        @enderror
                                    </div>

                                    {{-- <div class="form-floating">
                                        <input class="input form-control" id="message-field" type="text"
                                            placeholder="Message">
                                        <label for="message-field">Message</label>
                                    </div> --}}
                                    <button type="submit" class="button button-2">
                                        <span class="button-inner">
                                            <span class="button-content">
                                                <span class="text">Login</span>
                                            </span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                    </div>
                    <!--

                contact form - end
                -->
                </div>
            </div>
        </div>

    </div>

    <div class="background-pattern background-pattern-1" style=" width:100%; bottom:0;right:0; height:120%;  background-size: cover;
    ">
        <div class="background-pattern-img background-loop"
            style="background-image: url(/publik/assets/images/patterns/pattern.jpg);"></div>
        <div class="background-pattern-gradient"></div>
        {{-- <div class="background-pattern-bottom">
            <div class="image" style="background-image: url(/publik/assets/images/patterns/pattern-1.jpg)">
            </div>
        </div> --}}
    </div>
    <script src="/publik/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/publik/assets/js/swiper-bundle.min.js"></script>
    <script src="/publik/assets/js/glightbox.min.js"></script>
    <script src="/publik/assets/js/overlay-scrollbars.min.js"></script>
    <script src="/publik/assets/js/gsap.min.js"></script>
    <script src="/publik/assets/js/main.js"></script>
</body>

</html>
