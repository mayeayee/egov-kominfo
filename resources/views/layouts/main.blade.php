<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dinas Komunikasi dan Informatika Kabupaten Magetan</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/asset/images/Kominfo46.png">
    @stack('css')
    {{--
    <link rel="stylesheet" href="/asset/vendor/chartist/css/chartist.min.css"> --}}
    <link href="/asset/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    {{--
    <link href="/asset/vendor/owl-carousel/owl.carousel.css" rel="stylesheet"> --}}
    @livewireStyles
    <link href="/asset/css/style.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">

</head>

<body>




    <div id="main-wrapper">


        <div class="nav-header">
            <a href="/home" class="brand-logo">
                <img class="logo-abbr" src="/asset/images/Kominfo3.png" alt="">
                <img class="logo-compact" src="/asset/images/Kominfo-text.png" alt="">
                <img class="brand-title" src="/asset/images/Kominfo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>

        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ $tittle }}
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">

                            <li class="nav-item text-primary dropdown notification_dropdown">
                                <a class="nav-link  ai-icon text-primary" href="javascript:void(0)" role="button"
                                    data-toggle="dropdown" style="background: rgba(78, 116, 254, 0.027);">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="5b86e5"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M12.8333 5.91732V3.49998C12.8333 2.85598 13.356 2.33331 14 2.33331C14.6428 2.33331 15.1667 2.85598 15.1667 3.49998V5.91732C16.9003 6.16698 18.5208 6.97198 19.7738 8.22498C21.3057 9.75681 22.1667 11.8346 22.1667 14V18.3913L23.1105 20.279C23.562 21.1831 23.5142 22.2565 22.9822 23.1163C22.4513 23.9761 21.5122 24.5 20.5018 24.5H15.1667C15.1667 25.144 14.6428 25.6666 14 25.6666C13.356 25.6666 12.8333 25.144 12.8333 24.5H7.49817C6.48667 24.5 5.54752 23.9761 5.01669 23.1163C4.48469 22.2565 4.43684 21.1831 4.88951 20.279L5.83333 18.3913V14C5.83333 11.8346 6.69319 9.75681 8.22502 8.22498C9.47919 6.97198 11.0985 6.16698 12.8333 5.91732ZM14 8.16664C12.4518 8.16664 10.969 8.78148 9.87469 9.87581C8.78035 10.969 8.16666 12.453 8.16666 14V18.6666C8.16666 18.8475 8.12351 19.026 8.04301 19.1881C8.04301 19.1881 7.52384 20.2265 6.9755 21.322C6.88567 21.5028 6.89501 21.7186 7.00117 21.8901C7.10734 22.0616 7.29517 22.1666 7.49817 22.1666H20.5018C20.7037 22.1666 20.8915 22.0616 20.9977 21.8901C21.1038 21.7186 21.1132 21.5028 21.0234 21.322C20.475 20.2265 19.9558 19.1881 19.9558 19.1881C19.8753 19.026 19.8333 18.8475 19.8333 18.6666V14C19.8333 12.453 19.2185 10.969 18.1242 9.87581C17.0298 8.78148 15.547 8.16664 14 8.16664Z"
                                            fill="#5b86e5" />
                                    </svg>
                                    @if ($notif->count() > 0)
                                    <div class="pulse-css"></div>
                                    @endif
                                </a>
                                <div class="dropdown-menu rounded dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                                        <ul class="timeline">
                                            @if (isset($notif))
                                            @if ($notif->count()>0)

                                            @foreach ($notif as $item )

                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 text-info">
                                                        {{-- <img alt="image" width="50" src="images/avatar/1.jpg"> --}}
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">{{ $item->R_Aplikasi->nama_aplikasi ?? ''}}</h6>
                                                        <small class="d-block">{{ $item->deskripsi ?? '' }}</small>
                                                    </div>
                                                </div>
                                            </li>

                                            @endforeach
                                            @endif
                                            @endif
                                        </ul>
                                    </div>
                                    <a class="all-notification" href="/aduan">Lihat semua aduan <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link  ai-icon text-primary" href="javascript:void(0)" role="button"
                                    data-toggle="dropdown">
                                    <div class="media ai-icon  ">
                                        @if (isset(Auth::user()->avatar))
                                        <img class=" bg-primary-light" src="{{  asset(Auth::user()->avatar)  }}"
                                            width="20" alt="">
                                        @else
                                        <div>

                                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="#5b86e5"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        @endif
                                        {{-- <div class=" "></div> --}}


                                    </div>

                                    <div class="header-info">
                                        <span class="text-primary"><strong>{{ Auth::user()->name }}</strong></span>
                                        <p class="fs-12 mb-0 text-primary">{{ Auth::user()->role }}</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="/profil" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    {{-- <a href="/asset/email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        <span class="ml-2">Inbox </span>
                                    </a> --}}
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12">
                                            </line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">

                <ul class="metismenu" id="menu">
                    <li class=" "><a class=" ai-icon" href="/home" aria-expanded="false">
                            <i class="flaticon-381-networking "></i>
                            <span class="nav-text">Dashboard</span>
                        </a>

                    </li>
                    @if (Auth::user()->role == 'Super Admin')
                    <li class="{{ request()->is('whatapps') ? 'mm-active' : '' }}">
                        <a href="/whatapps" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-whatsapp"></i>
                            <span class="nav-text">Whatapps Gateway </span>
                        </a>
                    </li>
                    <li>
                        <a href="/user-management" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-user-9 "></i>
                            <span class="nav-text">User Management</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('pegawai/*') ? 'mm-active' : '' }}"><a href="/pegawai" class="ai-icon"
                            aria-expanded="false">
                            <i class="flaticon-381-user-8"></i>
                            <span class="nav-text">Pegawai</span>
                        </a>
                    </li>
                    <li class="{{ request()->is('opd/*') ? 'mm-active' : '' }}"><a href="/opd" class="ai-icon"
                            aria-expanded="false">
                            <i class="flaticon-381-id-card-1"></i>
                            <span class="nav-text">OPD</span>
                        </a>
                    </li>
                    <li><a href="/aplikasi" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-television"></i>
                            <span class="nav-text">Aplikasi</span>
                        </a>
                    </li>
                    <li><a href="/pengaduan" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-news"></i>
                            <span class="nav-text">Pengaduan</span>
                        </a>
                    </li>
                    <li><a href="/aduan" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-bookmark"></i>
                            <span class="nav-text">Aduan</span>
                        </a>
                    </li>
                    @endif
                    @if (Auth::user()->role == 'Project Manager')
                    <li class="{{ request()->is('aplikasi/*') ? 'mm-active' : '' }}"><a href="/aplikasi-pm"
                            class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-smartphone-1"></i>
                            <span class="nav-text">Aplikasi</span>
                        </a>
                    </li>
                    <li><a href="/antrian" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-hourglass-1"></i>
                            <span class="nav-text">Antrian</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-briefcase"></i>
                            <span class="nav-text">Productions</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="/maintenance">Running</a></li>
                            <li><a href="/perbaikan">Perbaikan</a></li>

                        </ul>
                    </li>
                    <li><a href="/aduan" class="ai-icon" aria-expanded="false">
                            <i class="flaticon-381-bookmark"></i>
                            <span class="nav-text">Aduan</span>
                        </a>
                    </li>
                    @endif
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-network"></i>
                            <span class="nav-text">Table</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li> --}}
                </ul>

            </div>
        </div>

        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <!-- Add Order -->

                {{-- <div class="page-titles">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Blank</a></li>
                    </ol>
                </div> --}}
                @yield('isi')

            </div>
        </div>

        <div class="footer">
            <div class="copyright">
                {{-- <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2021</p> --}}
            </div>
        </div>



    </div>

    {{-- @livewireScripts --}}

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />
    <x-livewire-alert::scripts />


    @livewireScripts




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>
    @include('sweetalert::alert')
    <!-- Required vendors -->
    <script src="/asset/vendor/global/global.min.js"></script>
    <script src="/asset/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    {{-- <script src="/asset/vendor/chart.js/Chart.bundle.min.js"></script> --}}
    <script src="/asset/js/custom.min.js"></script>
    <script src="/asset/js/deznav-init.js"></script>
    {{-- <script src="/asset/vendor/owl-carousel/owl.carousel.js"></script> --}}

    @stack('js')




</body>

</html>
