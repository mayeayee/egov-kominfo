<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
                <div class="profile-head">
                    <div class="photo-content">
                        <div class="cover-photo"></div>
                    </div>
                    <div class="profile-info">
                        <div class="profile-photo">
                            {{-- <img src="images/profile/profile.png" class="img-fluid rounded-circle" alt=""> --}}
                            @if (!empty($pegawai->avatar) && Storage::exists('public/' . $pegawai->avatar))
                            <img src="{{ Storage::url($pegawai->avatar) }}" class=" img-fluid  rounded-circle" alt="">
                            @else
                            <img src="/asset/images/profile/profile.png" class="img-fluid rounded-circle" alt="">

                            @endif
                        </div>
                        <div class="profile-details">
                            <div class="profile-name px-3 pt-2">
                                <h3 class="text-primary mb-0">{{ $pegawai->name }}</h3>
                                <p>{{ $pegawai->role }}</p>
                            </div>
                            <div class="profile-email px-2 pt-2">
                                <h4 class="text-muted mb-2">{{ $pegawai->email }}</h4>
                                <p style="text-transform: capitalize"><i
                                        class="fa fa-circle {{ $pegawai->status == 'aktif' ? 'text-success' : 'text-danger' }}  mr-1"></i>
                                    {{ $pegawai->status }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <strong>

                        Aplikasi Yang Sedang Dikerjakan
                    </strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-responsive-sm table-hover">
                            <thead>
                                <tr role="row">
                                    <th>No.</th>
                                    <th>Project</th>
                                    <th>OPD</th>
                                    <th>Prioritas</th>
                                    {{-- <th>Tim</th> --}}
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Selesai</th>
                                    <th>Deskripsi Aplikasi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tbody>
                                @php
                                $no =($nowapp->currentpage() - 1) * $nowapp->perpage() + 1;
                                @endphp
                                @forelse ($nowapp as $item)

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

                                    {{-- <td></td> --}}
                                    <td>{{ ($item->tgl_mulai ? date('d m Y', strtotime($item->tgl_mulai)) : '') }}</td>

                                    <td>{{ ($item->tgl_selesai ? date('d m Y', strtotime($item->tgl_selesai)) : '') }}
                                    </td>

                                    <td>{{ $item->deskripsi }}</td>
                                    <td class=" text-center"><span class="badge light badge-info">
                                            {{ $item->status_aplikasi }}
                                        </span></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" rowspan="3" class=" text-center">
                                        Data Kosong

                                    </td>
                                </tr>

                                @endforelse
                            </tbody>


                            </tbody>
                        </table>
                        <nav class="float-left ">
                            <p>Menampilkan {{ $nowapp->firstItem() }} sampai {{ $nowapp->lastItem() }} dari {{
                                $nowapp->total()
                                }} daftar</p>
                        </nav>
                        {{--
                    </div> --}}
                    {{ $nowapp->onEachSide(0)->links('layouts.halaman') }}
                </div>
            </div>
        </div>
    </div>
    {{--
</div> --}}
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <strong>

                Riwayat Aplikasi
            </strong>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-sm table-responsive-sm table-hover">
                    <thead>
                        <tr role="row">
                            <th>No.</th>
                            <th>Project</th>
                            <th>OPD</th>
                            <th>Prioritas</th>

                            <th>Tgl Mulai</th>
                            <th>Tgl Selesai</th>
                            <th>Deskripsi Aplikasi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tbody>
                        @php
                        $nom =($app->currentpage() - 1) * $app->perpage() + 1;
                        @endphp
                        @forelse ($app as $item)

                        <tr>
                            <td>{{ $nom++ }}</td>
                            <td> <strong> {{ $item->nama_aplikasi }} </strong></td>
                            <td>{{ $item->R_OPD->nama_opd }}</td>
                            <td><span class="{{ $item->prioritas == 'Urgent' ? 'badge-rounded badge-danger text-bold':(
                                        $item->prioritas == 'High' ? 'badge-rounded badge-warning text-bold': (
                                            $item->prioritas == 'Medium' ?'badge-rounded badge-primary  text-bold': (
                                                $item->prioritas == 'Low' ? 'badge-rounded badge-success text-bold':''
                                            )
                                        )
                                    ) }}">{{ $item->prioritas }}</span></td>

                            {{-- <td></td> --}}
                            <td>{{ ($item->tgl_mulai ? date('d m Y', strtotime($item->tgl_mulai)) : '') }}</td>

                            <td>{{ ($item->tgl_selesai ? date('d m Y', strtotime($item->tgl_selesai)) : '') }}
                            </td>

                            <td>{{ $item->deskripsi }}</td>
                            <td class=" text-center"><span class="badge light badge-info">
                                    {{ $item->status_aplikasi }}
                                </span></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" rowspan="3" class=" text-center">
                                Data Kosong

                            </td>
                        </tr>

                        @endforelse
                    </tbody>


                    </tbody>
                </table>
                <nav class="float-left ">
                    <p>Menampilkan {{ $app->firstItem() }} sampai {{ $app->lastItem() }} dari {{
                        $app->total()
                        }} daftar</p>
                </nav>
                {{--
            </div> --}}
            {{ $app->onEachSide(0)->links('layouts.halaman') }}
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>