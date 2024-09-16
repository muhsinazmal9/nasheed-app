@extends('layouts.backend')
@section('title', 'Create Album')
@push('style')
    <link rel="stylesheet" href="{{ asset('assets') }}/js/plugins/select2/css/select2.min.css">
@endpush
@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-1">
                        Create New Album
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Albums</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            Create
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Add New Album</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-4">
                                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control" required
                                    placeholder="Enter track title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tracks_id" class="form-label">Tracks <span class="text-danger">*</span></label>
                                <select name="tracks_id[]" id="tracks_id" class="form-select" multiple required>
                                </select>
                                @error('tracks_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Enter description"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="release_date" class="form-label">Release Date <span class="text-muted fs-sm">(Leave it blank to use current date)</span></label>
                                <input type="date" name="release_date" id="release_date" class="form-control"
                                    placeholder="Enter release date">
                                @error('release_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="cover_image" class="form-label">Cover Image</label>
                                <input type="file" class="form-control" name="cover_image" id="cover_image"
                                    onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])"
                                    placeholder="Enter cover image">
                            </div>
                            <div class="mb-4">
                                <img src="https://placehold.co/200x200" id="image_preview" alt="preview" width="50%">
                            </div>
                            <div class="mb-4">
                                <label for="status" class="form-label">Status</label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                                    <label class="form-check-label" for="status">Active</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary">Create Album</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets') }}/js/plugins/select2/js/select2.full.min.js"></script>

    <script>
        $('#tracks_id').select2({
            placeholder: 'Select Artists',
            allowClear: true,
            minimumInputLength: 1,
            multiple: true,
            ajax: {
                url: "{{ route('tracks.search') }}",
                dataType: 'json',
                type: 'GET',
                delay: 250,
                data: function(params) {
                    return {
                        q: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: $.map(response.data, function(item) {
                            console.log(item);
                            return {
                                text: item.title,
                                id: item.id
                            }
                        })
                    };
                },
                // cache: true
            }
        });
    </script>
    <script>
        const audioFile = document.getElementById('audio_file');
        audioFile.onchange = function(e) {
            var sound = document.getElementById('sound');
            sound.src = URL.createObjectURL(this.files[0]);
            sound.onend = function(e) {
                URL.revokeObjectURL(this.src);
            }
        }
    </script>
@endpush
