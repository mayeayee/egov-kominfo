<div>


    <div wire:ignore.self class="modal fade" id="tambahUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah User</h5>
                    <button type="button" wire:click.prevent="resetInput" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="save">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('name') input-warning-o @enderror ">
                                <input wire:model.lazy='name' type="text" class="form-control" id="nama"
                                    placeholder="Nama">
                                @error('name')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model.lazy="email" type="text" class="form-control" id="email"
                                    placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role </label>
                            <div class="form-group  @error('role') input-warning-o @enderror" wire:ignore>
                                <select wire:model.lazy="role" id="role" class="form-control default-select">
                                    <option>Pilih Role</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Project Manager">Project Manager</option>
                                </select>
                            </div>
                            @error('role')
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

    <div wire:ignore.self class="modal fade" id="editUser">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content ">
                <div class="modal-header">
                    <h5 class="modal-title">Edit User</h5>
                    <button wire:click.prevent="resetInput" type="button" class="close"
                        data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form action="" wire:submit.prevent="update">

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama">Nama </label>
                            <div class=" @error('name') input-warning-o @enderror ">
                                <input wire:model.lazy='name' type="text" class="form-control" id="nama"
                                    placeholder="Nama">
                                @error('name')
                                <div class="invalid-feedback d-block">

                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email </label>
                            <div class=" @error('email') input-warning-o @enderror ">
                                <input wire:model.lazy="email" type="text" class="form-control" id="email"
                                    placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                                @enderror

                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="role">Role </label>
                            <div class="form-group  @error('role') input-warning-o @enderror">
                                <select wire:model.lazy="role" class="form-control default-select">
                                    <option>Pilih Role</option>
                                    <option value="Super Admin">Super Admin</option>
                                    <option value="Project Manager">Project Manager</option>
                                </select>
                            </div>
                            @error('role')
                            <div class="invalid-feedback d-block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status">Pilih Status </label>
                            <div class="form-group  @error('status') input-warning-o @enderror">
                                <select wire:model.lazy="status" class="form-control default-select">
                                    <option>Status</option>
                                    <option value="aktif">Aktif</option>
                                    <option value="tidak aktif">Tidak Aktif</option>
                                </select>
                            </div>
                            @error('status')
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


    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="input-group search-area d-xl-inline-flex d-none">
                        <input type="text" wire:model="search" class="form-control" placeholder="Search here...">
                        <div class="input-group-append">
                            <span class="input-group-text"><a href="javascript:void(0)"><i
                                        class="flaticon-381-search-2"></i></a></span>
                        </div>
                    </div>
                    <div class=" card-action">
                        <button type="button" class="btn btn-rounded btn-primary " data-toggle="modal"
                            data-target="#tambahUser"><span class="btn-icon-left text-info"><i
                                    class="fa fa-plus  text-primary"></i>
                            </span>Tambah User</button>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive-md">
                            <thead>
                                <tr>

                                    <th class="width50" wire:click="sortBy('created_at')">No.</th>
                                    <th wire:click="sortBy('name')">
                                        <span>
                                            Nama User
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
                                    <th wire:click="sortBy('email')">
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
                                    </th>
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
                                    <th wire:click="sortBy('status')">
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
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = ($user->currentpage() - 1) * $user->perpage() + 1;

                                @endphp
                                @foreach ($user as $key)
                                <tr>

                                    <td><strong>{{ $no++ }}</strong></td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            {{-- <div
                                                class="rounded-lg mr-2 text-bg-primary text-primary badge-circle badge badge-light ">
                                                {{ Str::substr(Auth::user()->name, 0, 2) }}
                                            </div> --}}
                                            <span class="w-space-no">{{ $key->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $key->email }}</td>
                                    <td>{{ $key->role }}</td>
                                    <td>
                                        <div class="d-flex align-items-center" style="text-transform: capitalize">
                                            <i
                                                class="fa fa-circle {{ $key->status == 'aktif' ? 'text-success' : 'text-danger' }}  mr-1"></i>
                                            {{ $key->status }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a wire:click.prevent="edit({{ $key->id }})"
                                                class="btn btn-primary shadow btn-xs sharp mr-1" data-toggle="modal"
                                                data-target="#editUser"><i class="fa fa-pencil"></i></a>
                                            <a wire:click.prevent="konfimasiReset({{ $key->id }})"
                                                class="btn btn-warning shadow btn-xs sharp mr-1"><i
                                                    class=" fa fa-repeat "></i></a>
                                            <a wire:click.prevent="konfimasiDEL({{ $key->id }})"
                                                class="btn btn-danger shadow btn-xs sharp"><i
                                                    class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>








                    </div>
                </div>


                <div class="card-footer">
                    <div>
                        <nav class="float-left ">
                            <p>Menampilkan {{ $user->firstItem() }} sampai {{ $user->lastItem() }} dari {{
                                $user->total() }} daftar</p>
                        </nav>
                    </div>
                    {{ $user->onEachSide(1)->links('layouts.halaman') }}
                </div>
            </div>
        </div>
    </div>
    @push('js')
    <script>
        window.addEventListener('closeModal', event => {
                $("#tambahUser").modal('hide');
            })
            window.addEventListener('edit', event => {
                $("#editUser").modal('hide');
            })
            // window.livewire.on('closeModal', () => {
            //     $('#tambahUser').modal('hide');
            // });
            // window.livewire.on('edit', () => {
            //     $('#editUser').modal('hide');
            // });
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