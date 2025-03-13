@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Tambah Klien</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label fw-bold">Perusahaan</label>
                    <input type="text" class="form-control rounded-pill" id="company" name="company">
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill">Simpan</button>
                <a href="{{ route('clients.index') }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>
            </form>
        </div>
    </div>
@endsection
