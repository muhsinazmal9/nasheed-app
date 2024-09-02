@extends('layouts.backend')

@section('title', 'Create Track')

@push('style')
    {{-- TODO: remove cdn and replace with local --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
@endpush

@section('content')
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
                <div class="flex-grow-1">
                    <h1 class="h3 fw-bold mb-1">
                        Create New Track
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Tracks</a>
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
                <h3 class="block-title">Add New Track</h3>
            </div>
            <div class="block-content block-content-full">
                <form action="{{ route('tracks.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>
                            <div class="mb-4">
                                <label for="artist_id" class="form-label">Lyricist</label>
                                <select name="artist_id" id="artist_id" required>
                                    <option value="">Select Lyricist</option>
                                    <!-- Populate with artists -->
                                    @foreach ($artists as $artist)
                                        <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="album" class="form-label">Album</label>
                                <input type="text" name="album" id="album" class="form-control">
                            </div>
                            <input type="hidden" id="total_duration" name="duration" value="0">
                            <div class="mb-4">
                                <label for="genre" class="form-label">Genre</label>
                                <input type="text" name="genre" id="genre" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="release_date" class="form-label">Release Date</label>
                                <input type="date" name="release_date" id="release_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-4">
                                <label for="cover_image" class="form-label">Cover Image</label>
                                <input type="file" class="form-control" name="cover_image" id="cover_image"
                                    onchange="document.getElementById('image_preview').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                            <div class="mb-4">
                                <img src="https://placehold.co/400x400" id="image_preview" alt="Cover Image Preview" width="100%">
                            </div>
                            <div class="mb-4">
                                <label for="audio_file" class="form-label">Audio File</label>
                                <input type="file" class="form-control" name="audio_file" id="audio_file" accept=".mp3,.wav" required>
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
                            <button type="submit" class="btn btn-primary">Create Track</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
    <script>
        new TomSelect('#artist_id', {
            persist: false,
            sortField: {
                field: "text",
                direction: "asc"
            },
            create: false
        });
    </script>
@endpush
