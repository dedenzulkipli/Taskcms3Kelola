@extends('admin.layout.apps')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header bg-dark text-white text-center py-4">
                    <h3 class="fw-bold mb-0">Detail Client</h3>
                </div>
                <div class="card-body p-4">
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-user text-primary me-2"></i>
                                    <strong>Nama:</strong> <span class="ms-2">{{ $client->name }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-envelope text-danger me-2"></i>
                                    <strong>Email:</strong> <span class="ms-2">{{ $client->email }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-building text-success me-2"></i>
                                    <strong>Perusahaan:</strong> <span class="ms-2">{{ $client->company }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('clients.index') }}" class="btn btn-outline-dark px-4">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-primary px-4">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection