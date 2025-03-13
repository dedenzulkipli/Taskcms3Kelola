    @extends('admin.layout.apps')

    @section('container')
        <div class="card shadow-lg p-4 rounded-lg">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Tambah Karyawan</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="password" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control rounded-pill" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label fw-bold">Posisi</label>
                        <input type="text" class="form-control rounded-pill" id="position" name="position" required>
                    </div>
                    <div class="mb-3">
                        <label for="skills" class="form-label fw-bold">Keahlian</label>
                        <textarea class="form-control rounded-lg" id="skills" name="skills" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="experience" class="form-label fw-bold">Pengalaman</label>
                        <textarea class="form-control rounded-lg" id="experience" name="experience" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="photo" class="form-label fw-bold">Foto</label>
                        <input type="file" class="form-control rounded-pill" id="photo" name="photo">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-pill">Simpan</button>
                <a href="{{ route('clients.index') }}" class="btn btn-secondary w-100 py-2 rounded-pill mt-2">Batal</a>

                </form>
            </div>
        </div>
    @endsection
