@extends('layouts.main')

@section('isi')
<div class="row">




</div>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Aduan</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table data-primary="color_5" class="  display min-w850" id="example">
                    <thead class="thead-info">
                        <tr>
                            <th>No.</th>
                            <th>Aplikasi</th>
                            <th>CP</th>
                            <th>Deskripsi BUG</th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $no=1;
                        @endphp
                        @foreach ( $aduan as $item )

                        <tr>
                            <td>
                                {{ $no++ }}
                            </td>
                            <td>
                                {{ $item->R_Aplikasi->nama_aplikasi }}
                            </td>
                            <td>
                                {{ $item->cp }}
                            </td>
                            <td>
                                {{ $item->deskripsi }}
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Aplikasi</th>
                            <th>CP</th>
                            <th>Deskripsi BUG</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
{{--
</div> --}}
</div>
@endsection
@push('css')
<link href="/asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush
@push('js')
<script src="/asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/asset/js/plugins-init/datatables.init.js"></script>
@endpush