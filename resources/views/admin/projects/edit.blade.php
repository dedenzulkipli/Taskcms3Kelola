@extends('admin.layout.apps')

@section('container')
<div class="card shadow-lg p-4 rounded-lg">
    <div class="card-header bg-warning text-white">
        <h3 class="card-title">Edit Project</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label fw-bold">Judul Project</label>
                <input type="text" class="form-control rounded-pill" id="title" name="title" value="{{ $project->title }}" required>
            </div>
            
            <div class="mb-3">
                <label for="client_id" class="form-label fw-bold">Klien</label>
                <select class="form-control rounded-pill" id="client_id" name="client_id" required>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ $project->client_id == $client->id ? 'selected' : '' }}>
                            {{ $client->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Deskripsi</label>
                <textarea class="form-control rounded-lg" id="description" name="description" rows="3" required>{{ $project->description }}</textarea>
            </div>
            
            <div class="mb-3">
                <label for="tech_stack" class="form-label fw-bold">Teknologi</label>
                <input type="text" class="form-control rounded-pill" id="tech_stack" name="tech_stack" value="{{ $project->tech_stack }}" required>
            </div>
            
            <div class="mb-3">
                <label for="date" class="form-label fw-bold">Tanggal</label>
                <input type="date" class="form-control rounded-pill" id="date" name="date" value="{{ $project->date }}" required>
            </div>
            
            <div class="mb-3">
                <label for="status" class="form-label fw-bold">Status</label>
                <select class="form-control rounded-pill" id="status" name="status" required>
                    <option value="Complete" {{ $project->status == 'Complete' ? 'selected' : '' }}>Selesai</option>
                    <option value="Ongoing" {{ $project->status == 'Ongoing' ? 'selected' : '' }}>Sedang Berjalan</option>
                    <option value="Pending" {{ $project->status == 'Pending' ? 'selected' : '' }}>Tertunda</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="image" class="form-label fw-bold">Gambar Project</label>
                <input type="file" class="form-control rounded-pill" id="image" name="image">
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" width="100" class="mt-2 rounded" alt="Project Image">
                @endif
            </div>
            
            <button type="submit" class="btn btn-warning w-100 py-2 rounded-pill">Perbarui</button>
            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>
        </form>
    </div>
</div>
@endsection
