@extends('admin.layout.apps')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg overflow-hidden">
                <div class="card-header bg-dark text-white text-center py-4">
                    <h3 class="fw-bold mb-0">Detail Project</h3>
                </div>
                <div class="card-body p-4">
                    <div class="text-center mb-4">
                        @if ($project->image)
                            <img src="{{ asset('storage/' . $project->image) }}" class="border shadow-lg rounded" width="250" alt="Project Image">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" class="border shadow-lg rounded" width="250" alt="No Image">
                        @endif
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-file-alt text-primary me-2"></i>
                                    <strong>Judul:</strong> <span class="ms-2">{{ $project->title }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-user text-success me-2"></i>
                                    <strong>Klien:</strong> <span class="ms-2">{{ $project->client->name }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-align-left text-danger me-2"></i>
                                    <strong>Deskripsi:</strong> <span class="ms-2">{{ $project->description }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-code text-warning me-2"></i>
                                    <strong>Tech Stack:</strong> <span class="ms-2">{{ $project->tech_stack }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-calendar text-info me-2"></i>
                                    <strong>Tanggal:</strong> <span class="ms-2">{{ $project->date }}</span>
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <i class="fa fa-tasks text-secondary me-2"></i>
                                    <strong>Status:</strong> <span class="ms-2">{{ $project->status }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                        <a href="{{ route('projects.index') }}" class="btn btn-outline-dark px-4">
                            <i class="fa fa-arrow-left"></i> Kembali
                        </a>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-primary px-4">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
