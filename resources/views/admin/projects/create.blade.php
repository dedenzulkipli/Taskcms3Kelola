@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Tambah Project</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label fw-bold">Judul Project</label>
                    <input type="text" class="form-control rounded-pill" id="title" name="title" required>
                </div>
                
                <div class="mb-3">
                    <label for="client_id" class="form-label fw-bold">Klien</label>
                    <select class="form-control rounded-pill" id="client_id" name="client_id" required>
                        <option value="" disabled selected>Pilih Klien</option>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}">{{ $client->name }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="description" class="form-label fw-bold">Deskripsi</label>
                    <textarea class="form-control rounded-lg" id="description" name="description" rows="3" required></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="tech_stack" class="form-label fw-bold">Tech Stack</label>
                    <input type="text" class="form-control rounded-pill" id="tech_stack" name="tech_stack" required>
                </div>
                
                <div class="mb-3">
                    <label for="date" class="form-label fw-bold">Tanggal</label>
                    <input type="date" class="form-control rounded-pill" id="date" name="date" required>
                </div>
                
                <div class="mb-3">
                    <label for="status" class="form-label fw-bold">Status</label>
                    <select class="form-control rounded-pill" id="status" name="status" required>
                        <option value="Complete">Complete</option>
                        <option value="Ongoing">Ongoing</option>
                        <option value="Pending">Pending</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label for="image" class="form-label fw-bold">Gambar Project</label>
                    <input type="file" class="form-control rounded-pill" id="image" name="image">
                </div>
                
                <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill">Simpan</button>
                <a href="{{ route('clients.index') }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>

            </form>
        </div>
    </div>
@endsection