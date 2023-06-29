<div>


    {{-- ================================================================== modal tambah
    =============================================== --}}
    <div wire:ignore.self class="modal fade" id="tambahPegawai">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Pegawai</h5>
                    <button type="button" wire:click.prevent="resetInput" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="save">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('nama_pegawai') input-warning-o @enderror ">
                                <input wire:model.lazy='nama_pegawai' type="text" class="form-control" id="nama"
                                    placeholder="Nama">
                                @error('nama_pegawai')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model.lazy="email" type="email" class="form-control" id="email"
                                    placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan">Pofesi </label>
                            <div class="form-group  @error('jabatan') input-warning-o @enderror" wire:ignore>
                                <select wire:model.lazy="jabatan" id="jabatan" class="form-control default-select">
                                    <option>Pilih Pofesi</option>
                                    <option value="Project Manager">Project Manager</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="System Analyst">System Analyst</option>
                                    <option value="Programmer">Programmer</option>
                                </select>
                            </div>
                            @error('jabatan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">


                            <label class="">Unggah Avatar</label>
                            @if ($cek == 0)

                            @if ($avatar)
                            @if (in_array(strtolower($avatar->extension()), ['png', 'jpg', 'jpeg']))
                            <div class="mb-3" style="width:100px;
                                height:100px;">
                                <img src="{{ $avatar->temporaryUrl() }}" class=" rounded-circle" alt="" style="width:100%;
                                        height:100%; object-fit:cover;">
                            </div>
                            @endif

                            @endif
                            @endif

                            <div class="input-group mb-3">
                                <div class="input-group-prepend @error('avatar') input-warning-o @enderror">
                                    {{-- <button class="btn btn-primary btn-sm" type="button">Button</button> --}}
                                </div>
                                <div class="custom-file">
                                    <div class="col-lg-12">
                                        <input wire:model="avatar" type="file" class="custom-file-input">
                                        <label class="custom-file-label">
                                            @if ($cek == 0)
                                            @if ($avatar)
                                            {{ $avatar->getClientOriginalName() }}
                                            @else
                                            Choose file
                                            @endif
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('avatar')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click.prevent="resetInput" class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    {{-- ====================================================================== modal edit
    ============================================== --}}

    <div wire:ignore.self class="modal fade" id="editPegawai">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Pegawai</h5>
                    <button type="button" wire:click.prevent="resetInput" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="update">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('nama_pegawai') input-warning-o @enderror ">
                                <input wire:model.lazy='nama_pegawai' type="text" class="form-control" id="nama"
                                    placeholder="Nama">
                                @error('nama_pegawai')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model.lazy="email" type="email" class="form-control" id="email"
                                    placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="jabatan">Pofesi </label>
                            <div class="form-group  @error('jabatan') input-warning-o @enderror">
                                <select wire:model="jabatan" id="jabatan" class="form-control default-select">

                                    <option value="Project Manager">Project Manager</option>
                                    <option value="Quality Assurance">Quality Assurance</option>
                                    <option value="System Analyst">System Analyst</option>
                                    <option value="Programmer">Programmer</option>
                                </select>
                            </div>
                            @error('jabatan')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">


                            <label class="">Unggah Avatar <br>
                            </label>
                            @if ($update_avatar)

                            @if (in_array(strtolower($update_avatar->extension()), ['png', 'jpg', 'jpeg']))
                            <div class="mb-3" style="width:100px;
                            height:100px;">
                                <img src="{{ $update_avatar->temporaryUrl() }}" class=" rounded-circle" alt="" style="width:100%;
                                    height:100%; object-fit:cover;">
                            </div>
                            @endif
                            @elseif ($avatar)
                            <div class="mb-3" style="width:100px;
                    height:100px;">
                                <img src="{{ asset($avatar) }}" class=" rounded-circle" alt="" style="width:100%;
                            height:100%; object-fit:cover;">
                            </div>
                            @endif
                            <div class="input-group mb-3">
                                <div class="input-group-prepend @error('update_avatar') input-warning-o @enderror">
                                    {{-- <button class="btn btn-primary btn-sm" type="button">Button</button> --}}
                                </div>
                                <div class="custom-file">
                                    <div class="col-lg-12">
                                        <input wire:model="update_avatar" type="file" class="custom-file-input">
                                        <label class="custom-file-label">

                                            @if ($update_avatar)
                                            {{ $update_avatar->getClientOriginalName() }}
                                            @elseif ($avatar)
                                            {{ substr($avatar, 7) }}
                                            @else
                                            Choose file
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('update_avatar')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" wire:click.prevent="resetInput" class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>

            </div>
        </div>
    </div>







    <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between">
        <div class="mb-3 mr-3 ">
            <div class="input-group search-area d-xl-inline-flex d-none">
                <input type="text" wire:model="search" class="form-control text-danger" placeholder="masukkan nama">
                <div class="input-group-append">
                    <span class="input-group-text"><a href="javascript:void(0)"><i
                                class="flaticon-381-search-2"></i></a></span>
                </div>
            </div>
        </div>
        <div class="event-tabs mb-3 mr-3">
            <ul class="nav nav-tabs" role="tablist">

            </ul>
        </div>
        <div class="d-flex mb-3">



            <button type="button" data-toggle="modal" data-target="#tambahPegawai"
                class="btn  btn-rounded btn-primary"><span class="btn-icon-left text-primary"><i
                        class="fa fa-plus color-primary"></i>
                </span>Tambah Pegawai</button>

        </div>
    </div>



    <div class="row">
        {{-- @foreach ($pegawai as $key)
        <div class="col-xl-4 col-lg-5 col-md-7">
            <div
                class="widget-stat card {{ $key->role == 'System Analyst' ? 'gradient-11' : ($key->role == 'Programmer' ? 'gradient-17' : ($key->role == 'Project Manager' ? 'gradient-3' : 'gradient-18')) }} ">
                <div class="card-body p-4">
                    <div class="media">
                        <span class="mr-3 bg-white">
                            @if (!empty($key->avatar) && file_exists(public_path($key->avatar)) )
                            <img src="{{ asset($key->avatar) }}" class=" rounded-circle" alt="" width="85" height="85">
                            @else
                            <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                viewBox="0 0 24 24" fill="none" stroke="#BDCDD6" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-user">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            @endif

                        </span>
                        <div class="media-body text-white text-right">
                            <p class="mb-1">{{ Str::substr($key->name, 0, 20) }}</p>
                            <h4 class="text-white">{{ $key->role }}</h4>
                        </div>
                    </div>

                    <div class="float-right">
                        <a type="button" href="/pegawai/{{ $key->slug }}"
                            class="btn light btn-outline-light btn-sm mb-2 font-weight-bold ">Details</a>
                        <button type="button" class="btn light btn-outline-light sharp btn-sm mb-2 font-weight-bold "
                            data-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <circle fill="#ffffff" cx="12" cy="5" r="2">
                                    </circle>
                                    <circle fill="#ffffff" cx="12" cy="12" r="2">
                                    </circle>
                                    <circle fill="#ffffff" cx="12" cy="19" r="2">
                                    </circle>
                                </g>
                            </svg></button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" wire:click.prevent="edit({{ $key->id }})" data-toggle="modal"
                                data-target="#editPegawai">Edit</a>
                            <a class="dropdown-item" wire:click.prevent="konfimasiDEL({{ $key->id }})">Delete</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        @endforeach --}}


        <div class="card col-12">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-responsive-md">
                        <thead>
                            <tr>

                                <th class="width50" wire:click="sortBy('created_at')">No.</th>
                                <th wire:click="sortBy('name')">
                                    <span>
                                        Nama Pegawai
                                        @if($sortField === 'name')
                                        @if($sortAsc)

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        @endif
                                        @endif
                                    </span>
                                </th>
                                {{-- <th wire:click="sortBy('email')">
                                    <span>

                                        Email
                                        @if($sortField === 'email')
                                        @if($sortAsc)

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        @endif
                                        @endif
                                    </span>
                                </th> --}}
                                <th wire:click="sortBy('role')">
                                    <span>
                                        Role
                                        @if($sortField === 'role')
                                        @if($sortAsc)

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        @endif
                                        @endif
                                    </span>
                                </th>
                                <th>
                                    Aplikasi yang sedang dikerjakan
                                </th>
                                <th>

                                </th>
                                {{-- <th wire:click="sortBy('status')">
                                    <span>
                                        Status
                                        @if($sortField === 'status')
                                        @if($sortAsc)

                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M15.293 7.293a1 1 0 0 0-1.414-1.414L10 9.586 6.707 6.293a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>

                                        @else
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19" viewBox="0 0 20 20"
                                            fill="currentColor" class="inline-block h-4 w-4">
                                            <path fill-rule="evenodd"
                                                d="M4.707 12.707a1 1 0 0 0 1.414 1.414L10 10.414l3.293 3.293a1 1 0 0 0 1.414-1.414l-4-4a1 1 0 0 0-1.414 0l-4 4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        @endif
                                        @endif
                                    </span>
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = ($pegawai->currentpage() - 1) * $pegawai->perpage() + 1;

                            @endphp
                            @foreach ($pegawai as $key)
                            <tr>

                                <td><strong>{{ $no++ }}</strong></td>
                                <td>
                                    <div class="d-flex align-items-center">

                                        <span class="w-space-no">{{ $key->name }}</span>
                                    </div>
                                </td>
                                {{-- <td>{{ $key->email }}</td> --}}
                                <td>{{ $key->role }}</td>
                                {{-- <td>
                                    <div class="d-flex align-items-center" style="text-transform: capitalize">
                                        <i
                                            class="fa fa-circle {{ $key->status == 'aktif' ? 'text-success' : 'text-danger' }}  mr-1"></i>
                                        {{ $key->status }}
                                    </div>
                                </td> --}}
                                <td>
                                    {{-- @if ($key->R_Tim->first() && $key->R_Tim->first()->R_Aplikasi) --}}
                                    {{-- {{ $key->R_Tim->first()->R_Aplikasi->nama_aplikasi ?? '' }} --}}
                                    {{-- @endif --}}

                                    @if (isset( $key->R_Tim) )
                                    {{-- popo --}}
                                    @foreach ( $key->R_Tim as $p )
                                    @if ( $p->R_Aplikasi->status_aplikasi == 'Progres')

                                    {{ $p->R_Aplikasi->nama_aplikasi }} <br>

                                    @endif

                                    @endforeach
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href="/pegawai/{{ $key->slug }}"
                                            class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                class="fa fa-eye "></i></a>

                                    </div>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>

                    </table>








                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div>
                <nav class="float-left ">
                    <p>Menampilkan {{ $pegawai->firstItem() }} sampai {{ $pegawai->lastItem() }} dari {{
                        $pegawai->total() }} daftar</p>
                </nav>
            </div>
        </div>
        <div class="col">
            {{ $pegawai->onEachSide(1)->links('layouts.halaman') }}
        </div>

    </div>


    @push('js')
    <script>
        window.addEventListener('closeModal', event => {
                $("#tambahPegawai").modal('hide');
            })
            window.addEventListener('edit', event => {
                $("#editPegawai").modal('hide');
            })
            window.livewire.on('closeModal', () => {
                $('#tambahUser').modal('hide');
            });
            window.livewire.on('edit', () => {
                $('#editUser').modal('hide');
            });
    </script>
    <script wire:ignore>
        window.addEventListener('swal:confirm', event => {
                swal.fire({
                        title: event.detail.title,
                        text: event.detail.text,
                        icon: event.detail.type,
                        showCancelButton: true,
                        reverseButtons: true
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            window.livewire.emit('delete', event.detail.id);
                        }
                    });
            });

            window.addEventListener('swal:confirmpass', event => {
                swal.fire({
                        title: event.detail.title,
                        text: event.detail.text,
                        icon: event.detail.type,
                        showCancelButton: true,
                        reverseButtons: true
                    })
                    .then((result) => {
                        if (result.isConfirmed) {
                            window.livewire.emit('resetpass', event.detail.id);
                        }
                    });
            });
    </script>
    @endpush
</div>