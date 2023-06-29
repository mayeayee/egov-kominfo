<div>

    <!-- Add Order -->




    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="input-group search-area d-xl-inline-flex d-none">
                        <input type="text" wire:model="search" class="form-control" placeholder="Cari Project">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-responsive-sm table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Project</th>
                                    <th>OPD</th>
                                    <th>Prioritas</th>
                                    <th>Tim</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Selesai</th>
                                    <th>Deskripsi Aplikasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @php
                                $no =($aplikasis->currentpage() - 1) * $aplikasis->perpage() + 1;
                                @endphp
                                @foreach ($aplikasis as $item)

                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td> <strong> {{ $item->nama_aplikasi }} </strong></td>
                                    <td>{{ $item->R_OPD->nama_opd }}</td>
                                    <td><span class="{{ $item->prioritas == 'Urgent' ? 'badge-rounded badge-danger text-bold':(
                                        $item->prioritas == 'High' ? 'badge-rounded badge-warning text-bold': (
                                            $item->prioritas == 'Medium' ?'badge-rounded badge-primary  text-bold': (
                                                $item->prioritas == 'Low' ? 'badge-rounded badge-success text-bold':''
                                            )
                                        )
                                    ) }}">{{ $item->prioritas }}</span></td>
                                    <td>
                                        @if ($item->R_Tim->count() > 0)
                                        <div class="btn-group mb-1">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                {{ $item->R_Tim->count() }}
                                            </button>

                                            <div class="dropdown-menu">
                                                @foreach ( $item->R_Tim as $key)

                                                <a class="dropdown-item">{{ $key->R_User->name }}</a>
                                                @endforeach
                                                {{-- <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a> --}}

                                            </div>
                                        </div>
                                        @endif
                                    </td>
                                    <td>{{ ($item->tgl_mulai ? date('d m Y', strtotime($item->tgl_mulai)) : '') }}</td>

                                    <td>{{ ($item->tgl_selesai ? date('d m Y', strtotime($item->tgl_selesai)) : '') }}
                                    </td>

                                    <td>{{ $item->deskripsi }}</td>
                                    <td class=" text-center"><span class="badge light badge-info">
                                            {{ $item->status_aplikasi }}
                                        </span></td>
                                </tr>
                                @endforeach

                            </tbody>



                        </table>
                        {{-- <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                            Menampilkan 1 sampai 10 dari 30 daftar</div> --}}
                        {{-- <div> --}}
                            <nav class="float-left ">
                                <p>Menampilkan {{ $aplikasis->firstItem() }} sampai {{ $aplikasis->lastItem() }} dari {{
                                    $aplikasis->total()
                                    }} daftar</p>
                            </nav>
                            {{--
                        </div> --}}
                        {{ $aplikasis->onEachSide(0)->links('layouts.halaman') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>