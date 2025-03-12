@extends('admin.layout.apps')

@section('container')
    <div class="card shadow p-4">
        <h4 class="mb-4">Tambah Employee</h4>
        {{-- <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data"> --}}
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="user_id" class="form-label">User</label>
                    <select name="user_id" id="user_id" class="form-control" required>
                        <option value="">Pilih User</option>
                        {{-- @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="position" class="form-label">Posisi</label>
                    <input type="text" name="position" id="position" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="skills" class="form-label">Keahlian</label>
                    <input type="text" name="skills" id="skills" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="experience" class="form-label">Pengalaman</label>
                    <input type="text" name="experience" id="experience" class="form-control" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="file" name="photo" id="photo" class="form-control">
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
