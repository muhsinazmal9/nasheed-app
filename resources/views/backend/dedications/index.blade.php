@extends('layouts.backend')

@section('title', 'Dedication')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
@endpush

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-1">
                        Dedication
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Dedications</a>
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
            <div class="col-lg-4">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Add Dedication</h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <form action="{{ route('dedications.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                            </div>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control" placeholder="Enter description"></textarea>
                            </div>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="image"
                                    onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <img src="https://placehold.co/100" id="image_preview" alt="" width="100">
                            </div>

                            <div class="mb-3 form-check form-switch">
                                <label for="status" class="form-label">Active</label>
                                <input type="checkbox" name="status" id="status" class="form-check-input">
                            </div>
                            @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">
                            Dedication List
                        </h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="dedicationsTable">
                            <thead>
                                <tr>
                                    <th class="text-center">SL</th>
                                    <th>শান মুবারক</th>
                                    <th>Description</th>
                                    <th>Image / Logo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dedications as $dedication)
                                    <tr>
                                        <td class="text-center fs-sm">{{ $loop->iteration }}</td>
                                        <td class="fw-semibold fs-sm">{{ $dedication->name }}</td>
                                        <td class="fw-semibold fs-sm" style="max-width: 150px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                                            {{ Str::limit($dedication->description, 100) }}
                                        </td>
                                        <td class="fs-sm">
                                            <img src="{{ $dedication->image ? asset($dedication->image) : '' }}" alt="dedication" loading="lazy" width="50px">
                                        </td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox"
                                                    {{ $dedication->status == 1 ? 'checked' : '' }} name="status"
                                                    data-id="{{ $dedication->id }}" data-status="{{ $dedication->status }}"
                                                    onchange="updateDedicationStatus(this)">
                                            </div>
                                        </td>
                                        <td class="text-center d-flex">
                                            <a href="{{ route('dedications.edit', $dedication->id) }}" class="border-0 btn"><i
                                                    class="fa fa-pencil text-secondary fa-lg"></i></a>
                                            <button class="border-0 btn" href="#"
                                                onclick="deleteDedication(this)" data-id="{{ $dedication->id }}"><i
                                                    class="far fa-trash-can text-danger fa-lg"></i></button>
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
@endsection


@push('script')
    @include('backend.includes.dataTable_scripts')

    <script>
        $('#dedicationsTable').DataTable({
            responsive: true,
        });

        function deleteDedication(button) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {

                    deleteDedicationAjax(button);


                }
            });
        }

        function deleteDedicationAjax(button) {
            const id = $(button).data('id');
            const csrf = $('meta[name="csrf-token"]').attr('content');
            const url = "{{ route('dedications.destroy', ':id') }}".replace(':id', id);
            const method = "DELETE";

            $.ajax({
                url: url,
                type: method,
                dataType: 'JSON',
                success: function(response) {
                    if (response.success) {
                        showToast(response.message, "success");
                        $(button).closest('tr').hide(400, function() {
                            $(this).remove();
                        });
                    } else {
                        showToast(response.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText, status, error', xhr.responseText, status, error);
                    showToast('Something went wrong', "error");
                }
            });
        }


        function updateDedicationStatus(element) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, update it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    updateDedicationStatusAjax(element);
                } else {
                    element.checked = !element.checked;
                }
            })
        }

        function updateDedicationStatusAjax(element) {
            console.log(element);
            const id = $(element).data('id');
            let url = "{{ route('dedications.status.update', ':id') }}";
            url = url.replace(':id', id);

            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                success: function(data) {
                    if (data.success) {
                        showToast(data.message, "success");
                    } else {
                        showToast(data.message, "error");
                    }
                },
                error: function(xhr, status, error) {
                    console.log('xhr.responseText, status, error', xhr.responseText, status, error);
                    showToast('Something went wrong', "error");
                }
            });
        }
    </script>
@endpush
