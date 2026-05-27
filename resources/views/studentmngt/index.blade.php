@extends('layouts.app')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Employee Management') }}</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <a href="{{ route('studentmngt.create') }}" class="btn btn-info mb-3">Add New Employee</a>

            <div class="row">
                <div class="col-12">
                    <div class="card-body">
                        <table class="table table-bordered table-striped text-black">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Zip</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->id }}</td>
                                    <td>{{ $student->fname }}</td>
                                    <td>{{ $student->lname }}</td>
                                    <td>{{ $student->midname }}</td>
                                    <td>{{ $student->age }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->zip }}</td>
                                    <td>
                                        <a href="{{ route('studentmngt.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>
                                        <a href="{{ route('studentmngt.destroy', $student->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">Delete</a>
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
