@extends('admin.mastaring')

@section('content')
<div class="container-fluid mt-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Teacher List</h2>
        <a href="{{ route('teacher.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Add New Teacher
        </a>
    </div>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teachers as $teacher)
            <tr>
                <td><img src="{{ asset('teachers/'.$teacher->picture) }}" width="60"></td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>
                    <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm">Edit</a>

                    <form id="delete-form-{{ $teacher->id }}" action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm" onclick="deleteTeacher({{ $teacher->id }})">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection


@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            Swal.fire({ icon: 'success', title: 'Success!', text: '{{ session("success") }}', timer: 2000, showConfirmButton: false });
        @endif
    });

    function deleteTeacher(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
@endpush
