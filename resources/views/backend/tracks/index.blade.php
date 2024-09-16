@extends('layouts.backend')
@push('title')
    <title>Tracks | Naseed App</title>
@endpush
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-1">
                        Tracks
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Tracks</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            List
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="block block-rounded">
                    <div class="block-header block-header-default d-flex justify-content-between">
                        <h3 class="block-title">
                            Tracks List
                        </h3>
                        <div class="">
                            <a href="{{ route('tracks.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Track</a>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="tracksTable">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('script')
<script src="{{ asset('assets') }}/js/plugins/datatables/dataTables.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons/buttons.print.min.js"></script>
<script src="{{ asset('assets') }}/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
<script src="{{ asset('assets') }}/js/pages/be_tables_datatables.min.js"></script>

<script>
    const url = "{{ route('tracks.dataTables.list') }}";
    $('#tracksTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: url,
            type: 'GET',
            data: function (d) {
                console.log('data', d);
            },
            error: function (xhr, error, thrown) {
                console.log(xhr);
                console.log(error);
                console.log(thrown);
            }
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'cover_image', name: 'cover_image'},
            {data: 'status', name: 'status'},
            {data: 'actions', name: 'action', orderable: false, searchable: false},
        ]
    });

</script>
@endpush