@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Edit Karyawan</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" value="{{ $employee->user->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email" value="{{ $employee->user->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="position" class="form-label fw-bold">Posisi</label>
                    <input type="text" class="form-control rounded-pill" id="position" name="position" value="{{ $employee->position }}" required>
                </div>
                <div class="mb-3">
                    <label for="skills" class="form-label fw-bold">Keahlian</label>
                    <textarea class="form-control rounded-lg" id="skills" name="skills" rows="3" required>{{ $employee->skills }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="experience" class="form-label fw-bold">Pengalaman</label>
                    <textarea class="form-control rounded-lg" id="experience" name="experience" rows="3" required>{{ $employee->experience }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-label fw-bold">Foto</label>
                    <input type="file" class="form-control rounded-pill" id="photo" name="photo">
                    @if ($employee->photo)
                        <img src="{{ asset('storage/' . $employee->photo) }}" width="100" class="mt-2" alt="Foto">
                    @endif
                </div>
                <button type="submit" class="btn btn-warning w-100 py-2 rounded-pill">Perbarui</button>
                <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>
            </form>
        </div>
    </div>
@endsection