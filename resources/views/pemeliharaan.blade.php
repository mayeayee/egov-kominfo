@extends('layouts.main-public')

@section('index')
<div class="containerss">

    @forelse ( $list as $item )

    @if($loop->iteration % 2 == 0)
    <div class="timeline-block timeline-block-right">
        <div class="marker"></div>
        <div class="timeline-content">
            <h3> <strong>{{ $item->no_pengaduan }}</strong>{{ '. '.$item->R_Aplikasi->nama_aplikasi }}</h3>
            <span>{{ $item->R_Aplikasi->R_OPD->nama_opd }}</span>
            <p>
                {{ $item->deskripsi }}
            </p>
        </div>
    </div>
    @else

    <div class="timeline-block timeline-block-left">
        <div class="marker"></div>
        <div class="timeline-content">
            {{-- <h3>{{ $item->no_urut.' '.$item->nama_pengaduan }}</h3> --}}

            <h3 class="ltr-except-numbers"> <strong>{{ $item->no_pengaduan }}</strong>{{ '.
                '.$item->R_Aplikasi->nama_aplikasi }}</h3>

            <span>{{ $item->R_Aplikasi->R_OPD->nama_opd }}</span>
            <p>
                <strong>

                    {{ $item->nama_pengaduan }} <br>
                </strong>
                {{ $item->deskripsi }}
            </p>
        </div>
    </div>
    @endif


    @empty
    <div class="timeline-block timeline-block-right">
        <div class="marker"></div>
        <div class="timeline-content">
            <h3>Belum ada Pemeliharaan</h3>
            {{-- <span>Some work experience</span>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate.
            </p> --}}
        </div>
    </div>
    @endforelse

</div>
@endsection
@push('css')
<style>
    h1 span {
        font-weight: 600;
    }

    .containerss {
        width: 80%;
        padding: 50px 0;
        margin: 50px auto;
        position: relative;
        overflow: hidden;
    }

    .containerss:before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        margin-left: -1px;
        width: 2px;
        height: 100%;
        background: #ccd1d9;
        z-index: 1;
    }

    .timeline-block {
        width: -webkit-calc(50% + 8px);
        width: -moz-calc(50% + 8px);
        width: calc(50% + 8px);
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -moz-box-pack: justify;
        justify-content: space-between;
        clear: both;
    }

    .timeline-block-right {
        float: right;
    }

    .timeline-block-left {
        float: left;
        direction: rtl;
    }

    .ltr-except-numbers {
        direction: ltr;
        text-align: right;
    }

    /* .ltr-except-numbers:not(:is(p:contains(1), p:contains(2), p:contains(3))) {
        direction: inherit;
    } */

    .marker {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 2px solid #f5f7fa;
        background: #4fc1e9;
        margin-top: 10px;
        z-index: 99;
    }

    .timeline-content {
        width: 95%;
        padding: 0 15px;
        color: #666;
    }

    .timeline-content h3 {
        margin-top: 5px;
        margin-bottom: 5px;
        font-size: 25px;
        font-weight: 500;
    }

    .timeline-content span {
        font-size: 15px;
        color: #a4a4a4;
    }

    .timeline-content p {
        font-size: 14px;
        line-height: 1.5em;
        word-spacing: 1px;
        color: #888;
    }

    @media screen and (max-width: 768px) {
        .containerss:before {
            left: 8px;
            width: 2px;
        }
        .ltr-except-numbers {
            /* direction: ltr; */
            text-align: left;
        }

        .timeline-block {
            width: 100%;
            margin-bottom: 30px;
        }

        .timeline-block-right {
            float: none;
        }

        .timeline-block-left {
            float: none;
            direction: ltr;
        }
    }
</style>
@endpush
