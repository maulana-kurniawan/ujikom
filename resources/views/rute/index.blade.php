@extends('layouts.app')
@section('content')
<!-- Page header -->
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Data Master
                </div>
                <h2 class="page-title">
                    Data Rute
                </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('tambah-rute') }}" class="btn btn-teal" aria-label="Tambah Data">
                        Tambah Data
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page body -->
<div class="page-body">
    <div class="container-xl">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rute</h3>
                </div>
                <div class="table-responsive">
                    <table id="tabel" class="table card-table table-vcenter text-nowrap">
                        <thead>
                            <tr>
                                <th class="w-1 text-center">No.</th>
                                <th class="text-center">Tujuan</th>
                                <th class="text-center">Rute Awal</th>
                                <th class="text-center">Rute Akhir</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">ID Transportasi</th>
                                <th class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $rute)
                            <tr>
                                <td><span class="text-muted">{{ $i++ }}.</span></td>
                                <td>{{ $rute->tujuan }}</td>
                                <td>{{ $rute->rute_awal }}</td>
                                <td>{{ $rute->rute_akhir }}</td>
                                <td>Rp<span class="float-end">{{ number_format($rute->harga, 0, ".", ".") }}</span></td>
                                <td class="text-center">{{ $rute->id_transportasi }}</td>
                                <td class="text-center">
                                    <form method="post" action="{{ route('rute.destroy', $rute->id_rute) }}">
                                        @csrf
                                        <a href="{{ route('rute.edit', $rute->id_rute ) }}" class="btn btn-teal btn-icon" title="Ubah data rute ini" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                                                <path d="M16 5l3 3"></path>
                                                <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                                            </svg>
                                        </a>
                                        <button type="submit" class="btn btn-red btn-icon" title="Hapus data rute ini" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M4 7l16 0"></path>
                                                <path d="M10 11l0 6"></path>
                                                <path d="M14 11l0 6"></path>
                                                <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                                <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('components.footer')

@endsection

@section('custom_script')
<script>
    $(function() {
        $('#tabel').DataTable({
            paging: true,
            lengthChange: false,
            searching: true,
            ordering: true,
            info: true,
            autoWidth: false,
            language: {
                url: '/assets/libs/datatables/plugins/i18n/id.json'
            },
            columnDefs: [{
                orderable: false,
                targets: [1, 2, 3, 5]
            }],
            order: [
                [0, 'asc']
            ],
            buttons: [{
                    extend: 'excel',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5]
                    }
                },
            ]
        }).buttons().container().appendTo('#tabel_wrapper .col-md-6:eq(0)');

        setTimeout(function() {
            $("#tabel_wrapper .row:nth-child(1)").wrap("<div class='card-body border-bottom py-3'></div>");
            $("#tabel_wrapper .row:nth-child(3)").wrapInner("<div class='card-footer border-top-0 d-flex align-items-center'></div>");
            $("#tabel_info").addClass("m-0").removeClass('dataTables_info');
        }, 500);
    });
</script>
@endsection