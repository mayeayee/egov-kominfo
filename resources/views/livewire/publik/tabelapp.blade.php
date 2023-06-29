<div>
    <div class="faq-section faq-section-1 ">
        <div class="faq-section-wrapper">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="faq-wrapper">
                            <div class="faq" id="faq-accordion">
                                <div class="table-responsive">
                                    <!-- Add a wrapper div with class "table-responsive" -->

                                    <table class="table responsive   table-hover">
                                        <thead>
                                            <tr>
                                                {{-- <th style="font-size: 15px; width: 5%;"></th> --}}
                                                <th style="font-size: 15px; width: 7%;"
                                                     >
                                                    <span>

                                                        No

                                                    </span>
                                                </th>
                                                <th style="font-size: 15px;" wire:click="sortBy('nama_aplikasi')">
                                                    <span>

                                                        Nama Aplikasi
                                                        @if($sortField === 'nama_aplikasi')
                                                        @if($sortAsc)

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                        @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        @endif
                                                        @endif
                                                    </span>
                                                </th>
                                                <th style="font-size: 15px;" wire:click="sortBy('id_opd')">
                                                    <span>

                                                        OPD
                                                        @if($sortField === 'id_opd')
                                                        @if($sortAsc)

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                        @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        @endif
                                                        @endif
                                                    </span>
                                                </th>
                                                <th style="font-size: 15px; " wire:click="sortBy('status_aplikasi')">
                                                    <span>

                                                        Status
                                                        @if($sortField === 'status_aplikasi')
                                                        @if($sortAsc)

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>

                                                        @else
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="19"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            class="inline-block h-4 w-4">
                                                            <path fill-rule="evenodd"
                                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                        @endif
                                                        @endif
                                                    </span>
                                                </th>

                                                {{-- <th style="font-size: 15px">Nama Aplikasi</th>
                                                <th style="font-size: 15px">OPD</th>
                                                <th style="font-size: 15px">Status</th> --}}
                                                <th style="font-size: 15px; width: 5%;"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @php
                                            $no =1;
                                            @endphp
                                            @foreach ($app as $item)
                                            <tr>
                                                <td style="font-size: 13px; width: 5%; text-align: center;">{{ $no++ }}
                                                </td>
                                                <td style="font-size: 13px">{{ $item->nama_aplikasi }}</td>
                                                <td style="font-size: 13px">{{ $item->R_OPD->nama_opd }}</td>
                                                <td style="font-size: 13px">

                                                    @if (isset($item->status_projek))

                                                    @if ($item->status_projek == 'Selesai')
                                                    {{ $item->status_aplikasi }}
                                                    @else
                                                    {{ $item->status_projek }}

                                                    @endif
                                                    @else
                                                    {{ $item->status_aplikasi }}

                                                    @endif</td>
                                                <td style="font-size: 13px; width: 5%;">
                                                    <a href="{{ route('app-publik',$item->slug) }}" class="circle"
                                                        style="background-color: #03c4ff;border-radius:50%;width: 15px;height: 15px;display: flex; justify-content: center; align-items: center;">
                                                        <i class="las la-angle-right hover text-white"></i>
                                                    </a>
                                                </td>


                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
