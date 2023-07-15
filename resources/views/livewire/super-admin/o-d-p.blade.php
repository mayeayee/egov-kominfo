<div>
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

                    <div class="form-group">
                        <select wire:model="select" class="form-control form-control-lg  " wire:change="resetPage">
                            <option value="1">Semua</option>
                            <option value="2">Desa</option>
                            <option value="3">OPD</option>
                        </select>
                    </div>

                    @if ($select == 2)


                    <div class="form-group">
                        <select wire:model="desa" class="form-control form-control-lg default-select "
                            wire:change="resetPage">
                            @foreach ($desaa->unique() as $key )
                            <option value="{{ $key }}">{{ $key }}</option>

                            @endforeach
                        </select>
                    </div>

                    @endif

                    {{-- <h4 class="card-title font-weight-bold"></h4> --}}

                    <div class=" card-action">
                        <button data-toggle="modal" data-target="#add-opd" type="button"
                            class="btn btn-rounded btn-info">
                            <span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah OPD</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md table-hover">
                            <thead>
                                <th>NO.</th>
                                <th>Nama OPD</th>
                                <th>Email</th>
                                <th>Contact Person</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = ($OPD->currentpage() - 1) * $OPD->perpage() + 1;
                                @endphp
                                @foreach ($OPD as $item)

                                <tr>
                                    <td><strong>{{ $no++ }}</strong></td>
                                    <td>{{ $item->nama_opd }}</td>
                                    <td>{{ $item->email ?? "" }}</td>
                                    <td>{{ $item->no_telp ?? "" }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('show-opd',$item->slug) }}"
                                                class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-eye "></i></a>
                                            <a wire:click='edit({{ $item->id }})' data-toggle="modal"
                                                data-target="#edit-opd" class="btn btn-info shadow btn-xs sharp mr-1"><i
                                                    class="fa fa-pencil"></i></a>
                                            <a wire:click="komfir({{ $item->id }})"
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

                <div class=" card-footer">
                    <div>
                        <nav class="float-left ">
                            <p>Menampilkan {{ $OPD->firstItem() }} sampai {{ $OPD->lastItem() }} dari {{ $OPD->total()
                                }} daftar</p>
                        </nav>
                    </div>
                    {{ $OPD->onEachSide(1)->links('layouts.halaman') }}
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
                                <textarea wire:model='alamat' class="form-control form-control-lg" rows="4"></textarea>
                                @error('alamat')
                                <div class="invalid-feedback animated fadeInUp d-block">

                                    {{ $message }}
                                </div>
                                @enderror
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

    {{-- Modal add --}}

    <div wire:ignore.self class="modal fade" id="add-opd">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah OPD</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent='saveOPD()'>

                    <div class="modal-body">
                        {{-- <div class="basic-form"> --}}
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Nama OPD</label>
                                <div class="col-lg-10  @error('nama_opd') input-warning-o @enderror">
                                    <input type="text" wire:model='nama_opd' class="form-control form-control-lg"
                                        placeholder="masukkan nama OPD">
                                    @error('nama_opd')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

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
        window.addEventListener('tambah', event => {
                $("#add-opd").modal('hide');
            })

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
    </script>
    @endpush
</div>
