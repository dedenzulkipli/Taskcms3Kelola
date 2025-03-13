@extends('admin.layout.apps')

@section('container')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-lg">
                <div class="card-header bg-dark text-white text-center py-4">
                    <h3 class="fw-bold mb-0">Service Details</h3>
                </div>
                <div class="card-body p-4">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-cog text-primary me-2"></i>
                            <strong>Service Name:</strong> 
                            <span class="ms-2">{{ $service->name }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-align-left text-success me-2"></i>
                            <strong>Description:</strong> 
                            <span class="ms-2">{{ $service->description }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-code text-warning me-2"></i>
                            <strong>Tech Stack:</strong> 
                            <span class="ms-2">{{ $service->tech_stack }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-dollar-sign text-info me-2"></i>
                            <strong>Price:</strong> 
                            <span class="ms-2">${{ number_format($service->price, 2) }}</span>
                        </li>
                        <li class="list-group-item d-flex align-items-center">
                            <i class="fa fa-calendar text-danger me-2"></i>
                            <strong>Created At:</strong> 
                            <span class="ms-2">{{ $service->created_at->format('d M Y') }}</span>
                        </li>
                    </ul>

                    <div class="text-center mt-4">
                        <a href="{{ route('service.index') }}" class="btn btn-outline-dark px-4">
                            <i class="fa fa-arrow-left"></i> Back
                        </a>
                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary px-4">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
