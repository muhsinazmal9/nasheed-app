@extends('layouts.backend')

@section('title', 'Lyricists')

@push('style')
<link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
<link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
@endpush
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-lg-8">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                      <h3 class="block-title">
                       Artist List
                      </h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                      <table class="table table-bordered table-striped table-vcenter js-dataTable-responsive">
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
                            @foreach ($lyricists as $key=> $lyricist )
                            <tr>
                              <td class="text-center fs-sm">{{$key+1}}</td>
                              <td class="fw-semibold fs-sm">{{$lyricist->name}}</td>
                              <td class="fw-semibold fs-sm">{{$lyricist->description}}</td>
                              <td class="fs-sm">
                                <img src="" alt="">
                              </td>
                              <td>
                                <form id="statusForm" action="{{ route('lyricistStatus', $lyricist->id) }}" method="POST">
                                    @csrf
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" data-id="{{$lyricist->id}}" value="{{$lyricist->id}}" type="checkbox" {{$lyricist->status == 1 ? 'checked': ''}} id="example-switch-default1" name="status" onchange="updateStatus(this)">
                                    </div>
                                </form>
                              </td>
                              <td class="text-center">
                                    <a href="#" onclick="deleteLyricists(this)" data-id="{{$lyricist->id}}"><i class="far fa-trash-can text-danger"></i></a>
                              </td>
                            </tr>
                            @endforeach

                                  </tbody>
                      </table>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4">
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Add Lyricist</h3>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <form action="{{route('lyricists.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" id="image" onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>

                            <div class="mb-3">
                                <img src="https://placehold.co/100" id="image_preview" alt="" width="100">
                            </div>
                            <div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
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
    function deleteLyricists(button){
        const id = $(button).data('id');
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


            let url = "{{ route('lyricists.destroy', ':id') }}";
            url = url.replace(':id', id);
            let method = "DELETE";
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');



            $.ajax({
                    url: url,
                    type: 'DELETE',
                    dataType: 'json',
                    headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                    success: function(data) {
                        if(data.success){
                            toastr.success('Artist Deleted Successfully')
                            $(button).closest('tr')[0].remove()
                        }
                    }
                });

        }
        });
    }
</script>


<script>
   function updateStatus(element) {
    let id = element.value; 
    let url = "{{ route('lyricistStatus', ':id') }}";
    url = url.replace(':id', id);

    $.ajax({
        url: url,
        type: 'POST',
        dataType: 'json',
        headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        success: function(data) {
            if(data.success) {
                toastr.success('Status Updated Successfully');
            } else {
                toastr.error('Failed to Update Status');
            }
        },
        error: function(xhr, status, error) {
            toastr.error('An error occurred: ' + error);
        }
    });
}
</script>
@endpush
