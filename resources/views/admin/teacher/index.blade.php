@extends('admin.mastaring')

@section('content')
<style>
    .custom-gradient-bg {
        background: linear-gradient(135deg, rgb(140, 180, 144), rgb(92, 174, 88));
        border-radius: 15px;
        padding: 25px;
        color: white;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    }

    .table-container {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
        overflow: hidden;
        margin-top: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }


    .table {
        margin-bottom: 0;
    }

    .table thead {
        background: rgb(21, 86, 16);
        color: #fff;
        border: none;
    }

    .table th {
        padding: 15px;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 0.9rem;
        border: none;
    }

    .table td {
        vertical-align: middle;
        padding: 12px 15px;
        color: #333;
        border-color: #eee;
    }


    .table tbody tr:hover {
        background-color: rgba(37, 135, 47, 0.05);
        transition: 0.3s;
    }


    .teacher-img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid rgb(37, 135, 47);
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .btn-add {
        background: #fff;
        color: rgb(21, 86, 16);
        font-weight: bold;
        border: none;
        border-radius: 8px;
        padding: 10px 20px;
        transition: 0.3s;
    }

    .btn-add:hover {
        background: #f0f0f0;
        transform: translateY(-2px);
        color: rgb(37, 135, 47);
    }

    .action-btns .btn {
        border-radius: 6px;
        margin: 2px;
    }
</style>

<div class="container-fluid mt-4">
    <div class="custom-gradient-bg">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <h2 class="mb-0 fw-bold">Teacher Management</h2>
                <p class="mb-0 opacity-75">View and manage all registered teachers</p>
            </div>
            <a href="{{ route('teacher.create') }}" class="btn btn-add">
                <i class="fas fa-plus-circle me-1"></i> Add New Teacher
            </a>
        </div>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Profile</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Technology</th>
                            <th>Position</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td class="text-center">
                                <img src="{{ asset('teachers/'.$teacher->picture) }}" class="teacher-img" alt="Profile">
                            </td>
                            <td class="fw-bold">{{ $teacher->name }}</td>
                            <td>{{ $teacher->email }}</td>
                            <td><span class="badge bg-success opacity-75">{{ $teacher->technology }}</span></td>
                            <td>{{ $teacher->job_title }}</td>
                            <td class="text-center action-btns">
                                <a href="{{ route('teacher.edit', $teacher->id) }}" class="btn btn-warning btn-sm shadow-sm" title="Edit">
                                    <i class="fas fa-edit"></i> Edit
                                </a>

                                <form id="delete-form-{{ $teacher->id }}" action="{{ route('teacher.destroy', $teacher->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-sm shadow-sm" onclick="deleteTeacher({{ $teacher->id }})" title="Delete">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session("success") }}',
                timer: 2000,
                showConfirmButton: false,
                background: '#fff',
                iconColor: 'rgb(37, 135, 47)'
            });
        @endif
    });

    function deleteTeacher(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "This teacher's record will be permanently deleted!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: 'rgb(21, 86, 16)',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete it!',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        })
    }
</script>
@endpush
