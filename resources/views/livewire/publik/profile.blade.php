<div>


    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">

                </div>

                <div class="card-body">
                    <div class="text-center">
                        <div class="profile-photo">
                            <span class="mr-3 ">
                                @if (!empty(Auth::user()->avatar) && file_exists(public_path(Auth::user()->avatar)) )
                                <img src="{{ asset(Auth::user()->avatar) }}" class=" rounded-circle" alt="" width="100"
                                    height="100">
                                @else
                                <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                                    viewBox="0 0 24 24" fill="none" stroke="#BDCDD6" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                @endif

                            </span>
                        </div>
                        <h3 class="mt-4 mb-1">{{ Auth::user()->name }}</h3>
                        <h4 class=" text-muted mb-0">{{ Auth::user()->email }}</h4>
                        <p class="text-muted mt-0">{{ Auth::user()->role }}</p>
                        {{-- <a class="btn btn-outline-primary btn-rounded mt-3 px-5"
                            href="javascript:void(0)">Folllow</a> --}}
                    </div>
                </div>

                <div class="card-footer pt-0 pb-0 text-center">
                    <div class="row">
                        <div class="col-6 pt-3 pb-3 border-right">
                            <button wire:click.prevent="edit({{ Auth::user()->id  }})"
                                class="btn btn-outline-primary btn-rounded mt-3 px-5" data-toggle="modal"
                                data-target="#editPegawai">Edit Profile

                            </button>
                        </div>
                        <div class="col-6 pt-3 pb-3  ">
                            <button class="btn btn-outline-primary btn-rounded mt-3 px-5" data-toggle="modal"
                                data-target="#editPass">Edit Password

                            </button>
                        </div>
                        {{-- <div class="col-4 pt-3 pb-3">
                            <h3 class="mb-1">45</h3><span>Reviews</span>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="editPass">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Password</h5>
                    <button type="button" wire:click.prevent="resetInput" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='reset_pass'>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="pass">Password Baru </label>
                            <div class=" @error('pass') input-warning-o @enderror ">
                                <input wire:model.lazy='pass' type="password" class="form-control" id="pass"
                                    placeholder="Password Baru">
                                @error('pass')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="passr"> Konfimasi Password </label>
                            <div class=" @error('pass') input-warning-o @enderror ">
                                <input wire:model.lazy='password_confirmation' type="password" class="form-control"
                                    id="passr" placeholder=" Konfirmasi Password">
                                @error('password_confirmation')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
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

    <div wire:ignore.self class="modal fade" id="editPegawai">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Profile</h5>
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


    @push('js')
    <script>
        window.addEventListener('edit', event => {
                $("#editPegawai").modal('hide');
            })
        window.addEventListener('resset', event => {
                $("#editPass").modal('hide');
            })
    </script>
    @endpush
</div>
