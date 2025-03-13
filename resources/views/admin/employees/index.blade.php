@extends('admin.layout.apps')
@section('container')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">DataTables.Net</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Tables</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Datatables</a></li>
            </ul>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">User</h4>
                        <a href="{{ route('employees.create') }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i> Add User
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Posisi</th>
                                    <th>Keahlian</th>
                                    <th>Pengalaman</th>
                                    <th>Foto</th>
                                    <th style="width: 15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->user->name }}</td>
                                    <td>{{ $employee->user->email }}</td>
                                    <td>{{ $employee->position }}</td>
                                    <td>{{ $employee->skills }}</td>
                                    <td>{{ $employee->experience }}</td>
                                    <td>
                                        @if ($employee->photo)
                                            <img src="{{ asset('storage/' . $employee->photo) }}" width="50" alt="Foto">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <div class="form-button-action">
                                            <!-- Tombol Detail -->
                                            <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-link btn-info btn-lg">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <!-- Tombol Edit -->
                                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-link btn-primary btn-lg">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <!-- Tombol Delete -->
                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-danger btn-lg" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
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
</div>

@endsection
