<!DOCTYPE html>
<html lang="en">

<head>
    <!--
    meta tags
    -->
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
    <link rel="apple-touch-icon" sizes="180x180" href="/asset/images/Kominfo46.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/asset/images/Kominfo.46png">
    <link rel="icon" type="image/png" sizes="16x16" href="/asset/images/Kominfo46.png">
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
    {!! ReCaptcha::htmlScriptTagJsApi() !!}
    <link rel="stylesheet" href="/publik/assets/css/style.css">
    @livewireStyles
    @livewireScripts

    @stack('css')
    <style>
        .recaptcha-container {
            width: 100%;
            /* Adjust the width as per your requirements */
            margin: 0 auto;
            /* Center the container horizontally */

            /* Additional styling */
            padding: 10px;
            /* Add padding for spacing */
        }

        /* Media query for mobile devices */
        @media (max-width: 768px) {
            .recaptcha-container {
                2e width: 95%;
                /* Adjust the width for mobile devices */
            }
        }
    </style>
    <style>
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .spinning {
            animation: spin 1s infinite linear;
        }
    </style>

</head>

<body>

    <div class="main-wrapper">

        <!--
    preloader - start
    -->
        {{-- <div class="preloader">
            <div class="preloader-wrapper">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 200 200">
                    <g class="pre load6">
                        <path fill="#1B1A1C" d="M124.5,57L124.5,57c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7v0c0-3.9,3.1-7,7-7h36
                C121.4,50,124.5,53.1,124.5,57z" />
                        <path fill="#1B1A1C" d="M147.7,86.9L147.7,86.9c-2.7,2.7-7.2,2.7-9.9,0l-25.5-25.5c-2.7-2.7-2.7-7.2,0-9.9l0,0
                c2.7-2.7,7.2-2.7,9.9,0L147.7,77C150.5,79.8,150.5,84.2,147.7,86.9z" />
                        <path fill="#1B1A1C" d="M143,74.5L143,74.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7l0,0c-3.9,0-7-3.1-7-7v-36
                C136,77.6,139.1,74.5,143,74.5z" />
                        <path fill="#1B1A1C" d="M148.4,112.4L148.4,112.4c2.7,2.7,2.7,7.2,0,9.9L123,147.7c-2.7,2.7-7.2,2.7-9.9,0h0c-2.7-2.7-2.7-7.2,0-9.9
                l25.5-25.5C141.3,109.6,145.7,109.6,148.4,112.4z" />
                        <path fill="#1B1A1C"
                            d="M125.5,143L125.5,143c0,3.9-3.1,7-7,7h-36c-3.9,0-7-3.1-7-7l0,0c0-3.9,3.1-7,7-7h36 C122.4,136,125.5,139.1,125.5,143z" />
                        <path fill="#1B1A1C" d="M52.3,113.1L52.3,113.1c2.7-2.7,7.2-2.7,9.9,0l25.5,25.5c2.7,2.7,2.7,7.2,0,9.9h0c-2.7,2.7-7.2,2.7-9.9,0
                L52.3,123C49.5,120.2,49.5,115.8,52.3,113.1z" />
                        <path fill="#1B1A1C"
                            d="M57,75.5L57,75.5c3.9,0,7,3.1,7,7v36c0,3.9-3.1,7-7,7h0c-3.9,0-7-3.1-7-7v-36C50,78.6,53.1,75.5,57,75.5z" />
                        <path fill="#1B1A1C" d="M86.9,52.3L86.9,52.3c2.7,2.7,2.7,7.2,0,9.9L61.5,87.6c-2.7,2.7-7.2,2.7-9.9,0l0,0c-2.7-2.7-2.7-7.2,0-9.9
                L77,52.3C79.8,49.5,84.2,49.5,86.9,52.3z" />
                    </g>
                </svg>
            </div>
        </div> --}}
        <!--
    preloader - end
    -->

        <!--
    navigation - start
    -->
        <div class="navigation navigation-1">
            <div class="navigation-wrapper">
                <div class="container">
                    <div class="navigation-inner" style="padding: 1.5rem 0 1.5rem 0">
                        <div class="navigation-logo">
                            <a class="logo" href="/">
                                <img src="/asset/images/Kominfo.png" style=" height: 60px" alt="orions-logo">
                            </a>
                            <a class="logo-white" href="/">
                                <img src="/asset/images/Kominfo2.png" style=" height: 60px" alt="orions-logo">
                            </a>
                        </div>
                        <div class="navigation-menu">
                            <div class="mobile-header">
                                <div class="logo">
                                    <a href="/">
                                        <img src="/asset/images/Kominfo2.png" style=" height: 50px " alt=" image">
                                    </a>
                                </div>
                                <ul>
                                    <li class="close-button">
                                        <i class="fas fa-times"></i>
                                    </li>
                                </ul>
                            </div>
                            <ul class="parent">
                                <li>
                                    <a href="/" class="link-underline link-underline-1">
                                        <span>Beranda</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/app" class="link-underline link-underline-1">
                                        <span>Aplikasi</span>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('waiting-list') }}" class="link-underline link-underline-1">
                                        <span>Antrian</span>
                                    </a>

                                </li>

                                <li>
                                    <a href="{{ route('pemeliharaan') }}" class="link-underline link-underline-1">
                                        <span>Pemeliharaan</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/login" class="link-underline link-underline-1">
                                        <span>Login</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="social">
                                <h6>Ikuti</h6>
                                <ul>
                                    <li>
                                        <a href="https://twitter.com/KominfoMagetan1" target="_blank">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/diskominfomagetan" target="_blank">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/diskominfomagetan/" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UCb97y0GKY-i8l1caQBi2ZmQ"
                                            target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="background-pattern">
                                <div class="background-pattern-img background-loop"
                                    style="background-image: url(/publik/assets/images/patterns/pattern.jpg);"></div>
                                <div class="background-pattern-gradient"></div>
                            </div>
                        </div>
                        <div class="navigation-bar">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    navigation - end
    -->

        <!--
    page header - start
    -->
        <div class="page-header">
            <div class="page-header-wrapper" style="padding:  21.2rem 0 6.7rem 0;">
                <div class="page-header-inner">
                    <div class="container">
                        <div class="row d-lg-flex align-items-lg-end">
                            <div class="col-lg-6">
                                <div class="page-header-content c-white">
                                    <h1>{{ $tittle }}</h1>
                                    <ul>
                                        @if (isset($slug))
                                        <li>
                                            <a href="/" class="link-underline">
                                                <span>Beranda</span>
                                            </a>
                                        </li>

                                        <li>
                                            <i class="las la-angle-right"></i>
                                            <a href="{{ $slug }}" class="link-underline">
                                                <span>{{ $slugname }}</span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            @if (request()->is('app'))
                            <div class="col-lg-6">
                                @livewire('publik.cari')
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="background-pattern background-pattern-1">
                    <div class="background-pattern-img background-loop"
                        style="background-image: url(/publik/assets/images/patterns/pattern.jpg);"></div>
                    <div class="background-pattern-gradient"></div>
                    <div class="background-pattern-bottom">
                        <div class="image" style="background-image: url(/publik/assets/images/patterns/pattern-1.jpg)">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
    page header - end
    -->

        @yield('index')
        <!--
    tabs section - start
    -->
       
        <!--
    tabs section - end
    -->


        <!--
    faq section - start
    -->

        <!--
    faq section - end
    -->

        <!--
    instagram - start
    -->

        <!--
    instagram - end
    -->

        <!--
    footer - start
    -->
        <footer class="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="footer-row">
                                <div class="footer-detail">
                                    <a href="#">
                                        <img src="/asset/images/Kominfo.png" style="height: 50px" alt="footer-logo">
                                    </a>
                                    {{-- <p class="c-grey-1">Orions is a universal app template that was designed to
                                        cater
                                        to most of the modern app landing page designs requirements.</p> --}}
                                    <div class="links">
                                        <a class="link-underline" href="mailto:kominfo@magetan.go.id">
                                            <span>kominfo@magetan.go.id</span>
                                        </a>
                                        <a class="link-underline" href="tel:+62-351-8197-913">
                                            <span>(0351) 8197913</span>
                                        </a>
                                        <a class="link-underline" href="tel:+62-812-3117-7772">
                                            <span>081231177772</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="footer-list footer-social social-gradient">
                                    <h6>Follow</h6>
                                    <ul>
                                        <li class="twitter">
                                            <a href="https://twitter.com/KominfoMagetan1" target="_blank"
                                                class="link-underline">
                                                <i class="fab fa-twitter"></i>
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li class="facebook">
                                            <a href="https://www.facebook.com/diskominfomagetan" target="_blank"
                                                class="link-underline">
                                                <i class="fab fa-facebook"></i>
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="https://www.instagram.com/diskominfomagetan/" target="_blank"
                                                class="link-underline">
                                                <i class="fab fab fa-instagram"></i>
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                        <li class="youtube">
                                            <a href="https://www.youtube.com/channel/UCb97y0GKY-i8l1caQBi2ZmQ"
                                                target="_blank" class="link-underline">
                                                <i class="fab fa-youtube"></i>
                                                <span>Youtube</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="footer-list">
                                    <h6>Menu</h6>
                                    <ul>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>About</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>Our Team</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="features-1.html" class="link-underline">
                                                <span>Features</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-1.html" class="link-underline">
                                                <span>Blog</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="about.html" class="link-underline">
                                                <span>How It Works</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="link-underline">
                                                <span>Contact</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="footer-list">
                                    <h6>Explore</h6>
                                    <ul>
                                        <li>
                                            <a href="pricing.html" class="link-underline">
                                                <span>Pricing</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html" class="link-underline">
                                                <span>Terms of Services</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="privacy-policy.html" class="link-underline">
                                                <span>Privacy Policy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="link-underline">
                                                <span>Help Center</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="footer-copyright c-grey-1">
                                <h6>&copy; GFXPARTNER</h6>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="footer-pattern" style="background-image: url(/publik/assets/images/patterns/pattern-1.jpg)">
                </div>
            </div>
        </footer>
        <!--
    footer - end
    -->

    </div>

    <!--
    scripts
    -->
    <script src="/publik/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/publik/assets/js/swiper-bundle.min.js"></script>
    <script src="/publik/assets/js/glightbox.min.js"></script>
    <script src="/publik/assets/js/overlay-scrollbars.min.js"></script>
    <script src="/publik/assets/js/gsap.min.js"></script>
    <script src="/publik/assets/js/main.js"></script>
</body>

</html>
