@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Content Row -->
        <div class="card">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-gray">
                    {{ __('Destination Data') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.destinations.create') }}" class="btn btn-success">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New Destination') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="data-table" class="table table-bordered table-striped table-hover datatable datatable-role" cellspacing="0" width="100%">
                        
<thead>
    <tr>
        <th width="10"></th>
        <th>No</th>
        <th>{{ __('Image') }}</th>
        <th>{{ __('Name') }}</th>
        <th>{{ __('Caption') }}</th>
        <th>{{ __('Price') }}</th>
        <th>{{ __('Duration') }}</th>
        <th>{{ __('Date') }}</th>
        <th>{{ __('People') }}</th>
        <th>{{ __('Action') }}</th>
    </tr>
</thead>
<tbody>
    @forelse($destinations as $destination)
    <tr data-entry-id="{{ $destination->id }}">
        <td></td>
        <td>{{ $loop->iteration }}</td>
        <td>
            <a target="_blank" href="{{ Storage::url($destination->image) }}" class="">
                <img src="{{ asset('storage/' . $destination->image) }}" width="50" alt="">
            </a>
        </td>
        <td>{{ $destination->name }}</td>
        <td>{{ $destination->caption }}</td>
        <td>{{ $destination->price }}</td>
        <td>{{ $destination->duration }}</td>
        <td>{{ $destination->date ? \Carbon\Carbon::parse($destination->date)->format('d M Y') : '' }}</td>
        <td>{{ $destination->people }}</td>
        <td>
            <div class="btn-group btn-group-sm">
                <a href="{{ route('admin.destinations.edit', $destination->id) }}" class="btn btn-info">
                    <i class="fa fa-pencil-alt"></i>
                </a>
                <form onclick="return confirm('are you sure ? ')" class="d-inline" action="{{ route('admin.destinations.destroy', $destination->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" style="border-top-left-radius: 0;border-bottom-left-radius: 0;">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
            </div>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="10" class="text-center">{{ __('Data Empty') }}</td>
    </tr>
    @endforelse
</tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- Content Row -->
</div>
@endsection

@push('style-alt')
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
@endpush

@push('script-alt') 
    <script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"
    >
    </script>
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <script>
    $("#data-table").DataTable();
    </script>
@endpush