@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Tambah Service</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('service.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Service Name</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Description</label>
                    <textarea class="form-control rounded-lg" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="tech_stack" class="form-label fw-bold">Tech Stack</label>
                    <input type="text" class="form-control rounded-pill" id="tech_stack" name="tech_stack" required>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label fw-bold">Price ($)</label>
                    <input type="number" step="0.01" class="form-control rounded-pill" id="price" name="price" required>
                </div>

                <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill">
                    <i class="fa fa-save"></i> Simpan Service
                </button>
                <a href="{{ route('clients.index') }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>
            </form>
        </div>
    </div>
@endsection
