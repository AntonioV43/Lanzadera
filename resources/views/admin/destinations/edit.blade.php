@extends('layouts.app')

@section('content')
<div class="container-fluid">

<!-- Content Row -->
        <div class="card shadow">
            <div class="card-header">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">{{ __('edit destination')}}</h1>
                    <a href="{{ route('admin.destinations.index') }}" class="btn btn-success btn-sm shadow-sm">{{ __('Go Back') }}</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.destinations.update', $destination->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">{{ __('name') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="{{ __('name') }}" name="name" value="{{ old('name', $destination->name) }}" />
                    </div>
                    <div class="form-group">
                        <label for="caption">{{ __('caption') }}</label>
                        <input type="text" class="form-control" id="caption" placeholder="{{ __('caption') }}" name="caption" value="{{ old('caption', $destination->caption) }}" />
                    </div>
                    <div class="form-group">
                        <label for="price">{{ __('price') }}</label>
                        <input type="number" class="form-control" id="price" placeholder="{{ __('price') }}" name="price" value="{{ old('price', $destination->price) }}" />
                    </div>
                    <div class="form-group">
                        <label for="duration">{{ __('duration') }}</label>
                        <input type="text" class="form-control" id="duration" placeholder="{{ __('duration') }}" name="duration" value="{{ old('duration', $destination->duration) }}" />
                    </div>
                    <div class="form-group">
                        <label for="image">{{ __('image') }}</label>
                        <input type="file" class="form-control" id="image" placeholder="{{ __('image') }}" name="image" value="{{ old('image') }}" />
                    </div>
                    <div class="form-group">
                        <label for="date">{{ __('Date') }}</label>
                        <input type="date" class="form-control" id="date" name="date" value="{{ old('date', $destination->date) }}" />
                    </div>
                    <div class="form-group">
                        <label for="people">{{ __('People') }}</label>
                        <input type="number" class="form-control" id="people" placeholder="{{ __('Number of people') }}" name="people" value="{{ old('people', $destination->people) }}" />
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('description') }}</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{ old('description', $destination->description) }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-success">{{ __('Save')}}</button>
                </form>
            </div>
        </div>
    

    <!-- Content Row -->

</div>
@endsection


@push('style-alt')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush

@push('script-alt')
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
      $('.select-multiple').select2();
</script>
@endpush