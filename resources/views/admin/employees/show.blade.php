@extends('admin.layout.apps')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header bg-dark text-white text-center py-4">
                    <h3 class="fw-bold mb-0">Detail Karyawan</h3>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        @if ($employee->photo)
                            <img src="{{ asset('storage/' . $employee->photo) }}" class="rounded-circle border shadow-lg" width="150" height="150" alt="Foto Karyawan">
                        @else
                            <img src="{{ asset('images/default-avatar.png') }}" class="rounded-circle border shadow-lg" width="150" height="150" alt="No Image">
                        @endif
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-user text-primary me-2"></i>
                                    <strong>Nama:</strong> <span class="ms-2">{{ $employee->user->name }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-envelope text-danger me-2"></i>
                                    <strong>Email:</strong> <span class="ms-2">{{ $employee->user->email }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-briefcase text-success me-2"></i>
                                    <strong>Posisi:</strong> <span class="ms-2">{{ $employee->position }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-cogs text-warning me-2"></i>
                                    <strong>Keahlian:</strong> <span class="ms-2">{{ $employee->skills }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-calendar text-info me-2"></i>
                                    <strong>Pengalaman:</strong> <span class="ms-2">{{ $employee->experience }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('employees.index') }}" class="btn btn-outline-dark px-4">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary px-4">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
