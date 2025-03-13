@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Edit Service</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('service.update', $service->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Service Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" value="{{ $service->name }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea class="form-control rounded-lg" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
                </div>
                
                <div class="mb-3">
                    <label for="tech_stack" class="form-label fw-bold">Tech Stack</label>
                    <input type="text" class="form-control rounded-pill" id="tech_stack" name="tech_stack" value="{{ $service->tech_stack }}" required>
                </div>
                
                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price ($)</label>
                    <input type="number" step="0.01" class="form-control rounded-pill" id="price" name="price" value="{{ $service->price }}" required>
                </div>
                
                <button type="submit" class="btn btn-warning w-100 py-2 rounded-pill">Update Service</button>
                <a href="{{ route('service.show', $service->id) }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Cancel</a>
            </form>
        </div>
    </div>
@endsection
