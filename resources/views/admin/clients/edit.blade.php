@extends('admin.layout.apps')

@section('container')
    <div class="card shadow-lg p-4 rounded-lg">
        <div class="card-header bg-warning text-white">
            <h3 class="card-title">Edit Klien</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('clients.update', $client->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label fw-bold">Nama</label>
                    <input type="text" class="form-control rounded-pill" id="name" name="name" value="{{ $client->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email" value="{{ $client->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label fw-bold">Perusahaan</label>
                    <input type="text" class="form-control rounded-pill" id="company" name="company" value="{{ $client->company }}">
                </div>
                <button type="submit" class="btn btn-warning w-100 py-2 rounded-pill">Perbarui</button>
                <a href="{{ route('clients.show', $client->id) }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>
            </form>
        </div>
    </div>
@endsection
