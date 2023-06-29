<div>
    <div class="row">
        <div class="col lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="header-left">
                        <div class="dashboard_bar">
                            {{ $dataOPD->nama_opd }}
                        </div>
                    </div>

                    <div class="float-right">
                        <a data-toggle="modal" data-target="#edit-opd" class="btn light btn-info shadow  sharp mr-1"><i
                                class="fa fa-pencil"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-bold mb-0">{{ $dataOPD->email ?? 'Email OPD belum di input' }}</h3>
                    <small>{{ $dataOPD->no_telp ?? 'Contact Person OPD belum di input' }} </small>
                    <p>{{ $dataOPD->alamat ?? 'Alamat OPD belum di input' }}</p>
                </div>
            </div>
        </div>
    </div>

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
                        <table class="table table-responsive-md table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Project</th>
                                    {{-- <th>OPD</th> --}}
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
                                    {{-- <td>{{ $item->R_OPD->nama_opd }}</td> --}}
                                    <td><span class="{{ $item->prioritas == 'Urgent' ? 'badge-rounded badge-danger text-bold':(
                                        $item->prioritas == 'High' ? 'badge-rounded badge-warning text-bold': (
                                            $item->prioritas == 'Medium' ?'badge-rounded badge-primary  text-bold': (
                                                $item->prioritas == 'Low' ? 'badge-rounded badge-success text-bold':''
                                            )
                                        )
                                    ) }}">{{ $item->prioritas }}</span></td>
                                    <td>
                                        <div class="btn-group mb-1">
                                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                data-toggle="dropdown">
                                                {{ $item->R_Tim->count() }}
                                            </button>
                                            @if ($item->R_Tim->count() > 0)

                                            <div class="dropdown-menu">
                                                @foreach ( $item->R_Tim as $key)

                                                <a class="dropdown-item">{{ $key->name }}</a>
                                                @endforeach
                                                {{-- <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a> --}}

                                            </div>
                                            @endif
                                        </div>
                                    </td>
                                    <td>{{ ($item->tgl_mulai ? date('d F y', strtotime($item->tgl_mulai)) : '') }}</td>

                                    <td>{{ ($item->tgl_selesai ? date('d F y', strtotime($item->tgl_selesai)) : '') }}
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



    {{-- Modal edit --}}

    <div wire:ignore.self class="modal fade" id="edit-opd">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit OPD</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='updateOPD()'>

                    <div class="modal-body">
                        {{-- <div class="basic-form"> --}}
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Nama OPD</label>
                                <div class="col-lg-10  @error('nama_opd') input-warning-o @enderror">
                                    <input type="text" wire:model='nama_opd' class="form-control form-control-lg"
                                        placeholder="masukkan nama OPD">
                                </div>
                                @error('nama_opd')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Email</label>
                                <div class="col-lg-10  @error('email') input-warning-o @enderror">
                                    <input type="email" wire:model='email' class="form-control form-control-lg"
                                        placeholder="masukkan email">
                                    @error('email')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Contact Person</label>
                                <div class="col-lg-10  @error('no_telp') input-warning-o @enderror">
                                    <input type="number" wire:model='no_telp' class="form-control form-control-lg"
                                        placeholder="masukkan nomor">
                                    @error('no_telp')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Alamat</label>
                                <div class="col-lg-10  @error('alamat') input-warning-o @enderror">
                                    <textarea wire:model='alamat' class="form-control form-control-lg"
                                        rows="4"></textarea>
                                    @error('alamat')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            {{--
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    @push('js')
    <script>
        window.addEventListener('closeModal', event => {
                $("#edit-opd").modal('hide');
            })

    </script>
    @endpush
</div>
