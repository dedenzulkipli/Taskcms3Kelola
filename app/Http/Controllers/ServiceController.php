<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Tampilkan daftar services.
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Tampilkan form tambah service.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Simpan data service baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tech_stack' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        Service::create($request->all());

        return redirect()->route('service.index')->with('success', 'Service berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail service.
     */
    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    /**
     * Tampilkan form edit service.
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update data service.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'tech_stack' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
        ]);

        $service->update($request->all());

        return redirect()->route('services.index')->with('success', 'Service berhasil diperbarui.');
    }

    /**
     * Hapus data service.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service berhasil dihapus.');
    }
}

