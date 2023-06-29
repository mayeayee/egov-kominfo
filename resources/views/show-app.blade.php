@extends('layouts.main-public')

@section('index')
<div class="feature-section feature-section-1 feature-section-spacing-2">
    <div class="feature-section-wrapper" style="padding:0 0 0 0;">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                    <div class="feature-section-image">
                        {{-- <img src="/publik/assets/images/feature-section-2-img.jpg" class="image" alt="image"> --}}
                        <img src="/publik/assets/images/hero-phone.png" class="phone" alt="phone">
                        <div class="background-pattern background-pattern-radius-reverse">
                            <div class="background-pattern-img background-loop"
                                style="background-image: url(&quot;/publik/assets/images/patterns/pattern.jpg&quot;); background-position: -433.548px center;"
                                data-width="1850" data-height="1960"></div>
                            <div class="background-pattern-gradient"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-8 offset-md-2 col-10 offset-1">
                    <div class="feature-section-content">
                        <div class="section-heading">
                            <div class="sub-heading c-green upper ls-1">
                                <i class="las la-building"></i>
                                <h5>{{ $app->R_OPD->nama_opd }}</h5>
                            </div>
                            <div class="main-heading c-dark">

                                <h1 style="
                                 word-wrap: break-word; 
                                ">


                                        {{ $app->nama_aplikasi }}

                                </h1>

                            </div>
                        </div>
                        <p class="c-grey">{{ $app->deskripsi }}</p>
                        <div class="icon-text-1-group">
                            @if ($app->status_aplikasi == 'Progres')

                            <div class="icon-text-1">
                                <i class="las la-chart-area"></i>
                                <div>
                                    <h4 class="c-dark">Progres Aplikasi {{ $app->progres.'%' }}</h4>
                                    {{-- <p class="c-grey">He saw lesser whales man air. Seasons void fly replenish man
                                        divided open fifth own fruitful.</p> --}}
                                </div>
                            </div>
                            <div class="icon-text-1 ">
                                <i class="las la-terminal"></i>
                                <div>
                                    <h4 class="c-dark">{{ $app->status_projek }}</h4>
                                    <p class="c-grey">Status Aplikasi sedang {{ $app->status_projek }}</p>
                                </div>
                            </div>

                            @else

                            <div class="icon-text-1">
                                <i class="las la-desktop"></i>                             <div>
                                    <h4 class="c-dark">{{ $app->status_aplikasi }}</h4>
                                    <p class="c-grey">Status Aplikasi dalam {{ $app->status_aplikasi }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                        {{-- <a href="contact.html" class="button button-3">
                            <div class="button-inner">
                                <div class="button-content">
                                    <h4>Get Started</h4>
                                </div>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
