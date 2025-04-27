@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title ?? 'Data Penjualan' }}</h3>
            <div class="card-tools">
                <button onclick="modalAction('{{ url('/penjualan/create_ajax') }}')"
                    class="btn btn-sm btn-success mt-1">Tambah Penjualan</button>
                <a href="{{ route('penjualan.export_excel') }}" class="btn btn-sm btn-primary mt-1">
                    <i class="fa fa-file-excel"></i> Export Excel
                </a>

                <a href="{{ route('penjualan.export_pdf') }}" class="btn btn-sm btn-danger mt-1">
                    <i class="fa fa-file-pdf"></i> Export PDF
                </a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover table-sm" id="table_penjualan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Pembeli</th>
                        <th>User</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static"
        data-keyboard="false" data-width="75%"></div>
@endsection

@push('js')
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function () {
                $('#myModal').modal('show');
            });
        }

        var tablePenjualan;
        $(document).ready(function () {
            tablePenjualan = $('#table_penjualan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('penjualan/list') }}",
                    type: "POST"
                },
                searchDelay: 1000,
                columns: [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: "penjualan_kode",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "pembeli",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "user.nama",
                        orderable: false,
                        searchable: true
                    },
                    {
                        data: "penjualan_tanggal",
                        orderable: true,
                        searchable: true
                    },
                    {
                        data: "aksi",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>
@endpush