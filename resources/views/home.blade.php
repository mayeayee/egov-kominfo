{{-- @include('layouts.main') --}}
@extends('layouts.main')

@push('css')
<link href="/asset/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
@endpush


@section('isi')
{{-- <div class="d-flex flex-wrap mb-2 align-items-center justify-content-between"> --}}


    <div class="row">




    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Aplikasi</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table data-primary="color_5" class="  display min-w850" id="example">
                        <thead class="thead-info">
                            <tr>
                                <th>No.</th>
                                <th>Aplikasi</th>
                                <th>OPD</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @php
                            $no=1;
                            @endphp
                            @foreach ($app as $item)

                            <tr>
                                <th>{{ $no++ }}</th>
                                <td>{{ $item->nama_aplikasi }}</td>
                                <td>{{ $item->R_OPD->nama_opd }}</td>
                                <td>
                                    <div class="d-flex align-items-center"><i
                                            class="fa fa-circle {{ $item->status_aplikasi == 'Running' ? 'text-success' :( $item->status_aplikasi == 'Tidak Aktif' ? 'text-danger':'text-info'  ) }}  mr-1"></i>
                                        {{ $item->status_aplikasi }}</div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Aplikasi</th>
                                <th>OPD</th>
                                <th>Status</th>
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


@push('js')
<script src="/asset/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/asset/js/plugins-init/datatables.init.js"></script>
@endpush