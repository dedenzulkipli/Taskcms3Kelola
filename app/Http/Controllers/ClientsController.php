<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Tampilkan daftar clients.
     */
    public function index()
    {
        $clients = Clients::all();
        return view('admin.clients.index', compact('clients'));
    }

    /**
     * Tampilkan form tambah client.
     */
    public function create()
    {
        return view('admin.clients.create');
    }

    /**
     * Simpan data client baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients',
            'company' => 'nullable|string|max:255',
        ]);

        Clients::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail client.
     */
    public function show(Clients $client)
    {
        return view('admin.clients.show', compact('client'));
    }

    /**
     * Tampilkan form edit client.
     */
    public function edit(Clients $client)
    {
        return view('admin.clients.edit', compact('client'));
    }

    /**
     * Update data client.
     */
    public function update(Request $request, Clients $client)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:clients,email,' . $client->id,
            'company' => 'nullable|string|max:255',
        ]);

        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client berhasil diperbarui.');
    }

    /**
     * Hapus data client.
     */
    public function destroy(Clients $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client berhasil dihapus.');
    }
}