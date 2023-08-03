<div>
    {{-- @json($opd) --}}
    <div wire:ignore.self class="modal fade" id="modaltambah">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">Aplikasi Baru</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan'>
                    <div class="modal-body">

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Judul Projek</label>
                            <div class="col-lg-10">
                                <input wire:model='nama_aplikasi' type="text" class="form-control form-control-lg"
                                    placeholder="masukkan judul Projek">
                                @error('nama_aplikasi')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Contact Person</label>
                            <div class="col-lg-10">
                                <input wire:model='cp' type="number" class="form-control form-control-lg"
                                    placeholder="masukkan Contact Person">
                                @error('cp')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Jenis Projek</label>
                            <div class="col-lg-10">
                                <div wire:ignore>

                                    {{-- <div class="dropdown bootstrap-select form-control default-select"> --}}
                                        <select wire:model='type_projek' class="form-control default-select"
                                            tabindex="-98">
                                            <option value="">Pilih Jenis Projek</option>
                                            <option value="WEB">Website</option>
                                            <option value="Aplikasi">Aplikasi</option>
                                            {{-- <option>Perbaikan</option>
                                            <option>Tidak Aktif</option> --}}
                                        </select>
                                        {{--
                                    </div> --}}
                                </div>
                                @error('type_projek')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Klien (OPD)</label>
                            <div class="col-lg-10">
                                <div wire:ignore>
                                    <select wire:model='id_opd' id="mySelect" class="form-control default-select"
                                        tabindex="-98">
                                        <option value="">Pilih Klien (OPD)</option>
                                        @foreach ($opd as $key =>$value)

                                        <option value="{{ $key }}"> {{ $value }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('id_opd')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi Projek</label>
                            <div class="col-lg-10">
                                <textarea wire:model='deskripsi' class="form-control form-control-lg" rows="3"
                                    placeholder="masukkan deskripsi Projek"></textarea>
                                @error('deskripsi')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6 mx-0">

                                <label class="col-lg-12 col-form-label-lg font-weight-bold">Tanggal Mulai</label>
                                <div class="col-lg-12">
                                    <input type="date" wire:model='tgl_mulai' class="form-control form-control-lg"
                                        placeholder="masukkan tanggal progres Analisis Awal">
                                    @error('tgl_mulai')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6 mx-0">

                                <label class="col-lg-12 col-form-label-lg font-weight-bold">Tanggal Selesai</label>
                                <div class="col-lg-12">
                                    <input type="date" wire:model='tgl_selesai' class="form-control form-control-lg"
                                        placeholder="masukkan tanggal progres Analisis Awal">
                                    @error('tgl_selesai')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label font-bold ">Kirim Notifikasi?</label>
                            <div class="col-lg-8">
                                <div class="row">

                                    <div>

                                        <div class="switch">
                                            <div class="switch__1">
                                                <input wire:model='notif' id="switch-1" type="checkbox">
                                                <label for="switch-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="mb-3 mr-3">
                        <div class="input-group search-area d-xl-inline-flex d-none">
                            <input type="text" wire:model="search" class="form-control" placeholder="masukkan nama">
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i
                                            class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mb-3">



                        <button type="button" class="btn btn-rounded btn-info" data-toggle="modal"
                            data-target="#modaltambah"><span class="btn-icon-left text-info"><i
                                    class="fa fa-plus color-info"></i>
                            </span>Tambah Aplikasi</button>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                            <table id="example4" class="display min-w850 dataTable no-footer table-hover" role="grid"
                                aria-describedby="example4_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 75px;">No.</th>
                                        <th class="sorting_desc" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 152px;" aria-sort="descending">Project</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 230px;">OPD</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 105px;">Prioritas</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 140px;">Tim</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 300px;">Deskripsi Aplikasi</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 50px;">Progres</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" style="width: 50px;">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                    $no =($aplikasis->currentpage() - 1) * $aplikasis->perpage() + 1;
                                    @endphp
                                    @foreach ($aplikasis as $item)

                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td> <strong> {{ $item->nama_aplikasi }} </strong></td>
                                        <td>{{ $item->R_OPD->nama_opd ??'' }}</td>
                                        <td><span class="{{ $item->prioritas == 'Urgent' ? 'badge-rounded badge-danger text-bold':(
                                            $item->prioritas == 'High' ? 'badge-rounded badge-warning text-bold': (
                                                $item->prioritas == 'Medium' ?'badge-rounded badge-primary  text-bold': (
                                                    $item->prioritas == 'Low' ? 'badge-rounded badge-success text-bold':''
                                                )
                                            )
                                        ) }}">{{ $item->prioritas }}</span></td>
                                        <td>
                                            <div class="btn-group mb-1">
                                                @if ($item->R_Tim->count() > 0)
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                                    data-toggle="dropdown">
                                                    {{ $item->R_Tim->count() }}
                                                </button>

                                                <div class="dropdown-menu">
                                                    @foreach ( $item->R_Tim as $key)

                                                    <a class="dropdown-item">{{ $key->R_User->name }}</a>
                                                    @endforeach
                                                    {{-- <a class="dropdown-item"> {{ $key->R_Tim }}</a> --}}
                                                    {{-- <a class="dropdown-item" href="#">Something else here</a> --}}

                                                </div>
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            <p>{{ $item->deskripsi }}</p>
                                        </td>
                                        <td>
                                            <div class="progress mb-2">
                                                <div class="progress-bar progress-animated bg-info"
                                                    style="width: {{ $item->progres }}%"></div>
                                            </div>
                                            <small>{{ $item->progres }}% </small>
                                        </td>
                                        <td><a href="{{ route('show-aplikasi',$item->slug) }}"
                                                class="btn light btn-md btn-info">View</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>



                            </table>
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
@push('css')
<style>
    /* SWITCH */
    .switch {
        grid-column: 0.5;
        display: grid;
        grid-template-columns: repeat(2, min-content);
        grid-gap: 0.5rem;
        justify-self: center;
    }

    .switch input {
        display: none;
    }

    .switch__1,
    .switch__2 {
        width: 6rem;
    }

    .switch__1 label,
    .switch__2 label {
        display: flex;
        align-items: center;
        width: 100%;
        height: 2rem;
        box-shadow: 0.3rem 0.3rem 0.6rem #c8d0e7, -0.2rem -0.2rem 0.5rem #fff;
        background: rgba(255, 255, 255, 0);
        position: relative;
        cursor: pointer;
        border-radius: 1.6rem;
    }

    .switch__1 label::after,
    .switch__2 label::after {
        content: "";
        position: absolute;
        left: 0.4rem;
        width: 1rem;
        height: 1rem;
        border-radius: 50%;
        background: #9baacf;
        transition: all 0.4s ease;
    }

    .switch__1 label::before,
    .switch__2 label::before {
        content: "";
        width: 100%;
        height: 100%;
        border-radius: inherit;
        background: linear-gradient(330deg, #5b0eeb 0%, #6d5dfc 50%, #8abdff 100%);
        opacity: 0;
        transition: all 0.4s ease;
    }

    .switch input:checked~label::before {
        opacity: 1;
    }

    .switch input:checked~label::after {
        left: 76%;
        background: #e4ebf5;
    }
</style>
@endpush
@push('js')
<script>
    window.addEventListener('tambah', event => {
                    $("#modaltambah").modal('hide');
                })
</script>
@endpush
</div>
