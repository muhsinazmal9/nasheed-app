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
                        Albums
                    </h1>
                </div>
                <nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-alt">
                        <li class="breadcrumb-item">
                            <a class="link-fx" href="javascript:void(0)">Albums</a>
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
                            Albums List
                        </h3>
                        <div class="">
                            <a href="{{ route('albums.create') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Album</a>
                        </div>
                    </div>
                    <div class="block-content block-content-full overflow-x-auto">
                        <table class="table table-bordered table-striped table-vcenter" id="artistsTable">
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

                                @foreach ($albums as $key => $album)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $album->title }}</td>
                                        <td>{{ $album->description }}</td>
                                        <td>
                                            @if ($album->cover_image)
                                                <img src="{{ asset($album->cover_image) }}" alt="image" width="50">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($album->status == 1)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-danger">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('albums.edit', $album->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('albums.destroy', $album->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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
