<div>
    <div class="app-feature app-feature-1">
        <div class="app-feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-0 col-10 offset-1">
                        <div class="screen-section-header">
                            <div class="section-heading center-responsive">

                                <div class="main-heading c-dark">
                                    <h1>Semua Aplikasi</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 offset-lg-0 col-10 offset-1">
                        {{-- {{ $app->links('vendor.pagination.default') }} --}}
                        {{ $app->links('pagination::default') }}
                    </div>
                </div>
                <div class="row gx-5 gy-5">
                    @foreach ($app as $key )

                    <div class="col-lg-4 offset-lg-0 col-md-6 offset-md-0 col-10 offset-1">
                        <div class="app-feature-single app-feature-single-2">
                            <div class="app-feature-single-wrapper" style=" min-height: 400px; max-height:400px;">
                                <a href="{{ route('app-publik',$key->slug) }}" class="icon">
                                    @if ($key == 'WEB')

                                    <i class="las la-laptop"></i>
                                    @else

                                    <i class="las la-desktop"></i>
                                    @endif
                                </a>
                                <a href="{{ route('app-publik',$key->slug) }}">
                                    <h3 class="c-dark" style="margin:0.9rem 0 1.3rem 0">
                                        <p style="font-size: font-size: 3rem;
                                        font-weight: 600;">
                                            {{ $key->nama_aplikasi }}
                                        </p>
                                    </h3>
                                </a>
                                <p class="c-grey">{{ $key->deskripsi }}</p>
                            </div>
                            <a href="{{ route('app-publik',$key->slug) }}" class="circle">
                                <i class="las la-plus"></i>
                                <i class="las la-angle-right hover"></i>
                            </a>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>


    <div class="faq-section">
        <div class="faq-section-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-10 offset-xxl-1 col-lg-12 offset-lg-0 col-10 offset-1">
                        <div class="section-heading center width-64">
                            {{-- <div class="sub-heading c-green upper ls-1">
                                <i class="las la-file-alt"></i>
                                <h5>Pemeliharaan</h5>
                            </div> --}}
                            <div class="main-heading c-dark">
                                <h1>Aplikasi Dalam Pemeliharaan</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9 col-md-8 col-10">
                        <div class="faq-wrapper">
                            <div class="faq" id="faq-accordion">
                                <!--
                                accordion item - start
                                -->
                                @forelse ($peng as $item)


                                <div class="accordion-item">
                                    <div class="accordion-header" id="faq-{{ $item->id }}">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq-collapse-{{ $item->id }}"
                                            aria-expanded="true" aria-controls="faq-collapse-{{ $item->id }}">
                                            <span>{{ $item->R_Aplikasi->nama_aplikasi  }}</span>
                                        </button>
                                    </div>
                                    <div id="faq-collapse-{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="faq-{{ $item->id }}"
                                        data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <h5> {{  $item->nama_pengaduan }}</h5>
                                            <p>{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                </div>
                                @empty

                                @endforelse
                                <!--
                                accordion item - end
                                -->
                                <!--
                                accordion item - start
                                -->


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-10">
                        <div class="screen-slider-navigation slider-navigation"
                            style="justify-content:center;align-items:center;">
                            {{ $peng->links('pagination::default') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
