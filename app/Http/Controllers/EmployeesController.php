<?php

namespace App\Http\Controllers;

use App\Models\Employees;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{
    /**
     * Tampilkan daftar karyawan.
     */
    public function index()
    {
        $employees = Employees::with('user')->get();
        return view('admin.employees.index', compact('employees'));
    }

    /**
     * Tampilkan form tambah karyawan.
     */
    public function create()
    {
        return view('admin.employees.create');
    }

    /**
     * Simpan data karyawan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'position' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Simpan User
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        // Upload Foto jika ada
        $photoPath = null;
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        // Simpan Employee
        Employees::create([
            'user_id' => $user->id,
            'position' => $request->position,
            'skills' => $request->skills,
            'experience' => $request->experience,
            'photo' => $photoPath,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail karyawan.
     */
    public function show(Employees $employee)
    {
        return view('admin.employees.show', compact('employee'));
    }

    /**
     * Tampilkan form edit karyawan.
     */
    public function edit(Employees $employee)
    {
        return view('admin.employees.edit', compact('employee'));
    }

    /**
     * Update data karyawan.
     */
    public function update(Request $request, Employees $employee)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $employee->user_id,
            'position' => 'required|string|max:255',
            'skills' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Update User
        $employee->user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Upload Foto jika ada perubahan
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $employee->update(['photo' => $photoPath]);
        }

        // Update Employee
        $employee->update([
            'position' => $request->position,
            'skills' => $request->skills,
            'experience' => $request->experience,
        ]);

        return redirect()->route('employees.index')->with('success', 'Employee berhasil diperbarui.');
    }

    /**
     * Hapus data karyawan.
     */
    public function destroy(Employees $employee)
    {
        $employee->user->delete();
        $employee->delete();
        
        return redirect()->route('employees.index')->with('success', 'Employee berhasil dihapus.');
    }
}
