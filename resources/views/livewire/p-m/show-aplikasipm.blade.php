<div>
    <div class="row">
        <div class="col lg-12">
            <div class="card">
                <div class="card-header">

                    <div class="header-left">
                        <div class="dashboard_bar">
                            {{ $aplikasis->nama_aplikasi }}
                        </div>
                    </div>

                    <div class="float-right">
                        <span class="badge badge-rounded {{ $aplikasis->prioritas == 'Urgent' ? ' badge-danger ':(
                            $aplikasis->prioritas == 'High' ? ' badge-warning ': (
                                $aplikasis->prioritas == 'Medium' ?' badge-primary  ': (
                                    $aplikasis->prioritas == 'Low' ? ' badge-success ':''
                                )
                            )
                        ) }} badge-xl">{{ $aplikasis->prioritas }}</span>
                        <span class="badge badge-rounded badge-info badge-xl">{{ $aplikasis->status_projek }}</span>
                    </div>
                </div>
                <div class="card-body">
                    <h3 class="text-bold">{{ $aplikasis->R_OPD->nama_opd }}</h3>
                    <p>{{ $aplikasis->deskripsi }}</p>
                    @if ($aplikasis->status_aplikasi !== 'Inisiasi')

                    <div class="d-flex justify-content-between">

                        <div class="">Progress
                        </div>
                        <div class="form-group ">
                            <input {{ $aplikasis->status_projek == 'Selesai' ? 'readonly' : '' }} class="form-control
                            form-control-sm text-black" type="number" placeholder=""
                            wire:model.lazy='progres_apk' wire:change='updateProgres()' step="10" min="0" max="100"
                            style="text-align: center;height: 30px;width: 60px">
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar bg-success progress-animated" style="width: {{ $progres_apk }}%;"
                            role="progressbar">
                            {{-- {{ $progres_apk }} --}}
                        </div>
                    </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <!-- Add Order -->

    <div class="row">
        @if ($aplikasis->status_projek !== 'Selesai' || $aplikasis->status_projek !=='Ditolak')

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header d-block">
                    <h2 class="card-title">Pilih Progres</h2>
                </div>
                <div class="card-body">

                    <div class=" d-flex justify-content-between align-items-stretch flex-column h-auto">
                        @if(!$aplikasis->R_progres()->where('status', 'Disposisi Surat')->exists())

                        <button type="button" class="btn btn-danger  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalDS">Disposisi Surat</button>

                        @endif
                        @if(!$aplikasis->R_progres()->where('status', 'Analisis Awal')->exists())
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalAA">Analisis Awal</button>
                        @endif
                        @if ($aplikasis->status_aplikasi == 'Inisiasi')

                        <button type="button" class="btn btn-danger  btn-lg light ml-2 mb-5  px-4" data-toggle="modal"
                            data-target="#modalA">Antrian</button>
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalTPA">Tolak Projek</button>
                        @endif

                        @if ($aplikasis->status_aplikasi == 'Progres'||$aplikasis->status_aplikasi == 'Antrian')
                        @if(!$aplikasis->R_progres()->where('status', 'Analisis Kebutuhan')->exists())
                        <button type="button" class="btn btn-info  btn-lg light ml-2  mb-5 px-4" data-toggle="modal"
                            data-target="#modalAK">Analisis Kebutuhan</button>
                        @endif
                        @if(!$aplikasis->R_progres()->where('status', 'Coding')->exists())
                        <button type="button" class="btn btn-danger  btn-lg light mb-5  ml-2 px-4" data-toggle="modal"
                            data-target="#modalC">Coding</button>
                        @endif
                        @if(!$aplikasis->R_progres()->where('status', 'Testing')->exists())
                        <button type="button" class="btn btn-info  btn-lg light mb-5 ml-2 px-4" data-toggle="modal"
                            data-target="#modalT">Testing</button>
                        @endif
                        @if(!$aplikasis->R_progres()->where('status', 'UAT')->exists())

                        <button type="button" class="btn btn-info  btn-lg light  ml-2 px-4" data-toggle="modal"
                            data-target="#modalU">UAT</button>
                        @endif
                        @if($aplikasis->R_progres()->where('status', 'UAT')->exists())

                        <button type="button" class="btn btn-success  btn-lg light  ml-2 px-4" data-toggle="modal"
                            data-target="#modalS">Selesai</button>
                        @endif

                        @endif
                    </div>

                </div>
            </div>
        </div>
        @endif

        <div
            class=" @if ($aplikasis->status_projek !== 'Selesai' || $aplikasis->status_projek !=='Ditolak') col-xl-6  @else col-xl-12  @endif">
            <div class="card">
                <div class="card-body">
                    <div class="profile-tab">
                        <div class="custom-tab-1">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a href="#info-progres" data-toggle="tab"
                                        class="nav-link active show">Informasi Progres</a>
                                </li>
                                @if ($aplikasis->status_aplikasi == 'Ditolak' || $aplikasis->status_aplikasi ==
                                'Inisiasi')
                                @else
                                <li class="nav-item"><a href="#tim-aplikasi" data-toggle="tab" class="nav-link">Tim
                                        Aplikasi</a>
                                </li>
                                @endif
                            </ul>
                            <div class="tab-content">
                                <div id="info-progres" class="tab-pane fade active show">
                                    <div class="col-xl-12 col-xl-12 col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div id="DZ_W_TimeLine"
                                                    class="widget-timeline dz-scroll height370 ps ps--active-y">
                                                    @if ($aplikasis->R_progres->count() > 0)
                                                    <ul class="timeline">

                                                        @foreach ($aplikasis->R_progres as $item)

                                                        <li>
                                                            <div
                                                                class="timeline-badge  {{ $item->status == 'Ditolak' ? ' danger' :($item->status == 'Analisis Awal' ? 'warning' :($item->status == 'Disposisi Surat' ? 'info':($item->status == 'Selesai' ? 'success' :'primary'))  ) }}">
                                                            </div>
                                                            <a class="timeline-panel text-muted">
                                                                <span>{{ $item->tanggal->format('d-m-Y') }}</span>
                                                                <h6 class="mb-0"><strong>{{ $item->status }}</strong>
                                                                </h6>
                                                                <p class="mb-0">{{ $item->catatan }}</p>
                                                            </a>
                                                        </li>
                                                        @endforeach

                                                    </ul>
                                                    @endif
                                                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                        <div class="ps__thumb-x" tabindex="0"
                                                            style="left: 0px; width: 0px;"></div>
                                                    </div>
                                                    <div class="ps__rail-y"
                                                        style="top: 0px; height: 370px; right: 0px;">
                                                        <div class="ps__thumb-y" tabindex="0"
                                                            style="top: 0px; height: 261px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tim-aplikasi" class="tab-pane fade">
                                    <div class="pt-3">
                                        @if ($aplikasis->R_Tim->count() > 0)
                                        <div class="row">

                                            @foreach ($aplikasis->R_Tim as $item)
                                            <div class="col-6">

                                                <div class="media pt-3 ">
                                                    @if (!empty($item->R_User->avatar) &&
                                                    file_exists(public_path($item->R_User->avatar))
                                                    )
                                                    <img src="{{ asset($item->R_User->avatar) }}" class="mr-3 rounded"
                                                        alt="" width="55" height="55">
                                                    @else
                                                    <span class="mr-3 rounded  bg-primary-light"
                                                        style="width: 55px;height:55px;display: flex; justify-content: center; align-items: center;">
                                                        <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg"
                                                            width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                            stroke="#ffff" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-user">
                                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                            <circle cx="12" cy="7" r="4"></circle>
                                                        </svg>
                                                    </span>
                                                    @endif

                                                    <div class="media-body">
                                                        <h4 class="m-b-10"><span class="text-black">{{
                                                                $item->R_User->name }}</span></h4>
                                                        <h5 class="mb-3">{{ $item->role }}</h5>
                                                    </div>

                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div wire:ignore.self class="modal fade" id="modalS">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Aplikasi Selesai</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_selesai'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='selesai' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres selesai ">
                                @error('selesai')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalDS">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Disposisi Surat</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_disposisi'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='disposisi' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres disposisi surat">
                                @error('disposisi')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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

    <div wire:ignore.self class="modal fade" id="modalTPA">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Tolak Projek Aplikasi</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_ditolak'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" wire:model='tolak' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal Tolak Projek Aplikasi">
                                @error('tolak')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Alasan ditolak</label>
                            <div class="col-lg-10">
                                <textarea wire:model='alasan_tolak' class="form-control form-control-lg" rows="8"
                                    placeholder="masukkan deskripsi"></textarea>
                                @error('alasan_tolak')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalAA">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Analisis Awal</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_analisis_awal'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='analisis_awal' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Awal">
                                @error('analisis_awal')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalA">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">Antrian Aplikasi</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_antrian'>

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">

                                <div class="form-group">
                                    <strong><label>Prioritas Aplikasi</label></strong>
                                    <div wire:ignore>
                                        <select wire:model='prioritas' class="form-control default-select">
                                            <option>Pilih Prioritas Aplikasi</option>
                                            <option value="Urgent">Urgent</option>
                                            <option value="High">High</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Low">Low</option>
                                        </select>
                                    </div>
                                    @error('prioritas')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                {{-- {{ $no_urut }} --}}
                                <div class="form-group">
                                    <strong><label>Nomor Antrian Aplikasi</label></strong>
                                    <div wire:ignore>
                                        <select wire:model='no_urut' class="form-control default-select">
                                            <option>Pilih Nomor Antrian Aplikasi</option>
                                            @foreach ($norut as $item => $value)
                                            <option value="{{ $item }}"> {{ $item }} {{ $value ? ' - '.$value : '' }}
                                            </option>

                                            @endforeach
                                        </select>
                                    </div>
                                    @error('no_urut')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div wire:ignore class="form-group">
                                    <strong><label class="control-label">Project Manager</label></strong>
                                    <select wire:model='pm' class=" form-control default-select ">
                                        <option>Pilih Project Manager</option>
                                        @foreach ($PM as $item )
                                        <option value="{{ $item->id }}"> {{ $item->name }}
                                            {{-- {{ $item->R_Tim }} --}}

                                            @if ( $item->R_Tim->sum('progress_count') == 0)


                                            @else
                                            (Sedang mengerjakan {{  $item->R_Tim->sum('progress_count') }} aplikasi )

                                            @endif

                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('pm')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div wire:ignore class="form-group">
                                    <strong><label class="control-label">Quality Assurance</label></strong>
                                    <select wire:model='qa' class="form-control default-select">
                                        <option>Pilih Quality Assurance</option>
                                        @foreach ($PM as $item )
                                        <option value="{{ $item->id }}"> {{ $item->name }}
                                            @if ( $item->R_Tim->sum('progress_count') == 0)


                                            @else
                                            (Sedang mengerjakan {{  $item->R_Tim->sum('progress_count') }} aplikasi )

                                            @endif</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('qa')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div wire:ignore class="form-group">
                                    <strong><label class="control-label">System Analyst</label></strong>
                                    <select wire:model='sa' class="form-control default-select">
                                        <option>Pilih System Analyst</option>
                                        @foreach ($PM as $item )
                                        <option value="{{ $item->id }}"> {{ $item->name }}
                                            @if ( $item->R_Tim->sum('progress_count') == 0)


                                            @else
                                            (Sedang mengerjakan {{  $item->R_Tim->sum('progress_count') }} aplikasi )

                                            @endif </option>
                                        @endforeach
                                    </select>
                                </div>


                                @error('sa')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div wire:ignore class="form-group">
                                    <strong><label class="control-label">Programmer </label></strong>
                                    <select multiple id="sel" wire:model="pg" class="form-control default-select ">
                                        @foreach ($PM as $item )
                                        <option wire:loading.attr='disabled' value="{{ $item->id }}"> {{ $item->name }}
                                            @if ( $item->R_Tim->sum('progress_count') == 0)


                                            @else
                                            (Sedang mengerjakan {{  $item->R_Tim->sum('progress_count') }} aplikasi )

                                            @endif
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                                {{-- @json($pg) --}}

                                @error('pg')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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

    <div wire:ignore.self class="modal fade" id="modalAK">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Analisis Kebutuhan</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_AK'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='analisis_kebutuhan' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Kebutuhan">
                                @error('analisis_kebutuhan')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalC">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Coding</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_c'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <input type="date" wire:model='coding' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Kebutuhan">
                                @error('coding')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalT">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">Testing</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_testing'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" wire:model='testing' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Kebutuhan">
                                @error('testing')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi BUG</label>
                            <div class="col-lg-10">
                                <textarea wire:model='alasan_testing' class="form-control form-control-lg" rows="6"
                                    id="comment" placeholder="masukkan deskripsi BUG"></textarea>
                                @error('alasan_testing')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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
    <div wire:ignore.self class="modal fade" id="modalU">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h3 class="modal-title">UAT</h3>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='simpan_uat'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Tanggal</label>
                            <div class="col-lg-10">
                                <input type="date" wire:model='uat' class="form-control form-control-lg"
                                    placeholder="masukkan tanggal progres Analisis Kebutuhan">
                                @error('uat')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi BUG</label>
                            <div class="col-lg-10">
                                <textarea wire:model='alasan_uat' class="form-control form-control-lg" rows="6"
                                    id="comment" placeholder="masukkan deskripsi BUG"></textarea>
                                @error('alasan_uat')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
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
{{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}
{{-- <script type="text/JavaScript">
    $(function () {
                $("#sel option").each(function(i){
                    if(i > 0){
                        var title = "The select val=" + $(this).attr("data-title");
                        $(this).attr("title", title);
                    }
                });
            });
        </script> --}}


<script type="text/JavaScript">
    $(function () {
        $("#sel option").each(function(){
            var dataTitle = $(this).data("title");
            if (dataTitle) {
                $(this).attr("title", dataTitle);
            }
        });
    });
</script>
<script>
    // document.addEventListener("livewire:load", function () {
        //     // Inisialisasi Bootstrap Select pada elemen dengan ID mySelect
        //     $('#mySelect').selectpicker();

        //     // Reload komponen Livewire saat nilai terpilih berubah
        //     $('#mySelect').on('changed.bs.select', function (e) {
        //         Livewire.emit('selectedValuesChanged', $(this).val());
        //     });
        // });



            // $('[data-toggle="tooltip"]').tooltip();






            window.addEventListener('SELESAI', event => {
            $("#modalS").modal('hide');
            })
            window.addEventListener('UAT', event => {
            $("#modalU").modal('hide');
            })
            window.addEventListener('Testing', event => {
            $("#modalT").modal('hide');
            })
            window.addEventListener('Coding', event => {
            $("#modalC").modal('hide');
            })
            window.addEventListener('Analisis-Kebutuhan', event => {
            $("#modalAK").modal('hide');
            })
            window.addEventListener('Antrian-Aplikasi', event => {
            $("#modalA").modal('hide');
            })
            window.addEventListener('Analisis-Awal', event => {
            $("#modalAA").modal('hide');
            })
            window.addEventListener('Tolak-Projek-Aplikasi', event => {
            $("#modalTPA").modal('hide');
            })
            window.addEventListener('Disposisi-Surat', event => {
            $("#modalDS").modal('hide');
            })
</script>
@endpush
</div>
