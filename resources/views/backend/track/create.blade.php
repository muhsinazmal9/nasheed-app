@extends('layouts.backend')

@push('title')
    <title>Create Track | Naseed App</title>
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
                                <label for="artist" class="form-label">Artist</label>
                                <select name="artist_id" id="artist" class="form-select" required>
                                    <option value="">Select Artist</option>
                                    <!-- Populate with artists -->
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="album" class="form-label">Album</label>
                                <input type="text" name="album" id="album" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="duration" class="form-label">Duration</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="hours" name="duration_hours" min="0" max="23" placeholder="HH">
                                    <span class="input-group-text">:</span>
                                    <input type="number" class="form-control" id="minutes" name="duration_minutes" min="0" max="59" placeholder="MM">
                                    <span class="input-group-text">:</span>
                                    <input type="number" class="form-control" id="seconds" name="duration_seconds" min="0" max="59" placeholder="SS">
                                </div>
                            </div>
                            <input type="hidden" id="total_duration" name="duration" value="0">
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
                                <input type="file" class="form-control" name="audio_file" id="audio_file" required>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const hoursInput = document.getElementById('hours');
        const minutesInput = document.getElementById('minutes');
        const secondsInput = document.getElementById('seconds');
        const durationDisplay = document.getElementById('duration_display');

        function padZero(num) {
            return num.toString().padStart(2, '0');
        }

        function updateDuration() {
            const hours = padZero(hoursInput.value || 0);
            const minutes = padZero(minutesInput.value || 0);
            const seconds = padZero(secondsInput.value || 0);
            const duration = `${hours}:${minutes}:${seconds}`;
            durationDisplay.textContent = duration;
            const totalSeconds = (parseInt(hours) * 3600) + (parseInt(minutes) * 60) + parseInt(seconds);
            document.getElementById('total_duration').value = totalSeconds;
        }

        function handleInput(input, min, max) {
            input.addEventListener('input', function() {
                let value = this.value.replace(/[^0-9]/g, '');
                if (value == '') {
                    this.value = '';
                } else {
                    value = parseInt(value);
                    if (value < min) value = min;
                    if (value > max) value = max;
                    this.value = value;
                }
                updateDuration();
                // On input block
                onInputBlock(this, min, max);
            });

            input.addEventListener('blur', function() {
                if (this.value == '') {
                    this.value = min;
                    updateDuration();
                }
            });
        }

        function onInputBlock(input, min, max) {
            // This function will be called every time the input changes
            let value = parseInt(input.value);
            // Ensure the value is within the valid range
            if (value < min) {
                input.value = min;
            } else if (value > max) {
                input.value = max;
            }
            // Pad with leading zero if necessary
            if (input.value.length == 1) {
                input.value = padZero(input.value);
            }
            // You can add more custom logic here
            // For example, moving focus to the next input when max is reached
            if (value == max) {
                if (input == minutesInput) secondsInput.focus();
            }
        }

        handleInput(hoursInput, 0, 23);
        handleInput(minutesInput, 0, 59);
        handleInput(secondsInput, 0, 59);
    });
</script>

@endpush
