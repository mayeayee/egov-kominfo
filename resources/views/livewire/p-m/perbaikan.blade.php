<div>
    <div class="row">

        <div class="col-12">
            <div class="card">
                {{-- <div class="card-header">
                </div> --}}
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-sm table-responsive-sm table-hover">
                            <thead>
                                <tr role="row">
                                    <th>No.</th>
                                    <th>Aplikasi</th>
                                    <th>Deskripsi BUG</th>
                                    <th>No Urut</th>
                                    <th class="width180">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no =1;
                                @endphp
                                @foreach ($perbaikan as $item)


                                <tr>
                                    <td>
                                        {{ $no++ }}
                                    </td>
                                    <td> <strong> {{ $item->R_aplikasi->nama_aplikasi }} </strong></td>
                                    <td>
                                        <p class=" text-justify">
                                            {{ $item->deskripsi }}


                                        </p>
                                    </td>
                                    <td>{{ $item->no_pengaduan }}</td>
                                    <td>
                                        <div class="d-flex justify-content-between">
                                            @if ($item->status == 'Baru')
                                            <button type="button" wire:click='develop({{ $item->id }})' class="btn light btn-md btn-danger">Develop</button>
                                            @endif
                                            @if ($item->status == 'Develop')
                                            <button type="button" wire:click='selesai({{ $item->id }})'
                                                class="btn ml-2 light btn-md btn-success">Selesai</button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
