<div>
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




                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm table-responsive-sm table-hover">

                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Aplikasi</th>
                                    <th>OPD</th>
                                    <th>Status</th>

                                </tr>
                            </thead>

                            <tbody>
                                @php
                                $no =($run->currentpage() - 1) * $run->perpage() + 1;
                                @endphp
                                @foreach ($run as $key => $item)

                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td> <strong>{{ $item->nama_aplikasi }}</strong></td>
                                    <td>{{ $item->R_OPD->nama_opd }}  </td>
                                    <td>
                                        <div  >
                                            <select wire:change='show({{ $item->id }})' id="my-select-{{ $item->id }}"
                                                class="form-control form-control-lg   " style="min-width: 150px;"
                                                wire:model="status.{{ $item->id }}">
                                                <option {{ $item->status_aplikasi == 'Running' ? 'selected':'' }}
                                                    {{ $item->status_aplikasi == 'Perbaikan' ? 'disabled':'' }}
                                                    value="Running">Running</option>
                                                <option {{ $item->status_aplikasi == 'Perbaikan' ? 'selected':'' }}
                                                    {{ $item->status_aplikasi == 'Perbaikan' ? 'disabled':'' }}
                                                    value="Perbaikan">Perbaikan</option>
                                                <option {{ $item->status_aplikasi == 'Tidak Aktif' ? 'selected':'' }}
                                                    value="Tidak Aktif">Tidak Aktif</option>
                                                <option {{ $item->status_aplikasi == 'Semi Aktif' ? 'selected':'' }}
                                                    value="Semi Aktif">Semi Aktif</option>

                                            </select>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>



                        </table>
                        <nav class="float-left ">
                            <p>Menampilkan {{ $run->firstItem() }} sampai {{ $run->lastItem() }} dari {{
                                $run->total()
                                }} daftar</p>
                        </nav>

                        {{ $run->onEachSide(0)->links('layouts.halaman') }}

                    </div>
                </div>
            </div>
        </div>






        <div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-perbaikan">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h3 class="modal-title">Perbaikan</h3>
                        <button type="button" wire:click='rst({{ $ids }})' class="close"
                            data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent='simpan_perbaikan'>
                        <div class="modal-body">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Nama Perbaikan</label>
                                <div class="col-lg-10">
                                    <input wire:model='nama_perbaikan' type="text" class="form-control form-control-lg"
                                        placeholder="masukkan Nama Perbaikan">
                                    @error('nama_perbaikan')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Nomor Antrian
                                    Perbaikan</label>
                                <div class="col-lg-10">
                                    <div >
                                        <select wire:model='no_urut' class="form-control default-select">
                                            <option value="">Pilih Nomor Antrian Aplikasi</option>
                                            @foreach ($norut as $item => $value)
                                            <option value="{{ $item }}"> {{ $item }} {{ $value ? ' - '.$value : ''
                                                }}
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
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Deskripsi BUG</label>
                                <div class="col-lg-10">
                                    <textarea wire:model='deskripsi_bug' class="form-control form-control-lg" rows="6"
                                        id="comment" placeholder="masukkan deskripsi BUG"></textarea>
                                    @error('deskripsi_bug')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" wire:click='rst({{ $ids }})' class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ================================== --}}

    <div>
        <div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-tidak">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h3 class="modal-title">Aplikasi Tidak Aktif</h3>
                        <button type="button" wire:click='rst({{ $ids }})' class="close"
                            data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent='simpan_tidak'>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Keterangan </label>
                                <div class="col-lg-10">
                                    <textarea wire:model='alasan' class="form-control form-control-lg" rows="6"
                                        id="comment" placeholder="masukkan keterangan "></textarea>
                                    @error('alasan')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" wire:click='rst({{ $ids }})' class="btn btn-danger light"
                                    data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <div>
        <div wire:ignore.self class="modal fade" data-backdrop="static" id="modal-semi">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h3 class="modal-title">Aplikasi Semi Aktif</h3>
                        <button type="button" wire:click='rst({{ $ids }})' class="close"
                            data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent='simpan_semi'>
                        <div class="modal-body">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label-lg font-weight-bold">Keterangan </label>
                                <div class="col-lg-10">
                                    <textarea wire:model='alasan' class="form-control form-control-lg" rows="6"
                                        id="comment" placeholder="masukkan keterangan "></textarea>
                                    @error('alasan')
                                    <div class="invalid-feedback animated fadeInUp d-block">

                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" wire:click='rst({{ $ids }})' class="btn btn-danger light"
                            data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('css')
    <style>
        .bootstrap-select .dropdown-menu .disabled {
            color: rgb(57, 60, 64);
            background-color: rgba(224, 224, 224, 0.411);
        }
    </style>
    @endpush
    @push('js')


    <script>
        window.addEventListener('tutup_perbaikan', event => {
        $("#modal-perbaikan").modal('hide');
        });
        window.addEventListener('tutup_tidak', event => {
        $("#modal-tidak").modal('hide');
        });
        window.addEventListener('tutup_semi', event => {
        $("#modal-semi").modal('hide');
        });

        // Mendeteksi perubahan nilai pada select menggunakan Livewire
        let data = '{{ $resett }}';
        console.log(data);
        Livewire.on('statusSelected', function(selectedValue) {
            if (selectedValue === 'Perbaikan') {

                switch(data){
                    case "1":
                        $('#modal-perbaikan').modal('show');
                        data = '0';
                        break;
                    case "0":
                        data = '1';
                        break;
                    default:

                }

            } else if(selectedValue === 'Tidak Aktif'){

                switch(data){
                    case "1":
                        $('#modal-tidak').modal('show');
                        data = '0';
                        break;
                    case "0":
                         data = '1';
                        break;
                    default:

                }

            }else if(selectedValue === 'Semi Aktif'){

                switch(data){
                    case "1":
                        $('#modal-semi').modal('show');
                        data = '0';
                        break;
                    case "0":
                         data = '1';
                        break;
                    default:

                }
            }else{
                data = '1';
            }
            console.log(data);
        });
        Livewire.on('optionUpdated', ([selectedOption, key]) => {
            const selectElements = document.querySelectorAll(`[id^=my-select-${key}]`);

            selectElements.forEach((selectElement) => {
                selectElement.value = selectedOption;
                selectElement.dispatchEvent(new Event('change'));
            });
        });


        Livewire.on('dataSaved', () => {
            // Your JavaScript logic here
            data = '1';
            console.log(data);
            Swal.fire({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            icon: 'success',
            title: 'Data Berhasil Disimpan'
        });
        });

        // Livewire.on('optionsUpdated', (selectedOptions) => {
        //     Object.entries(selectedOptions).forEach(([key, value]) => {
                // const selectElement = document.getElementById(`my-select-${key}`);
        //         selectElement.value = value;
        //         selectElement.dispatchEvent(new Event('change'));
        //     });
        // });
    </script>
    @endpush
</div>
