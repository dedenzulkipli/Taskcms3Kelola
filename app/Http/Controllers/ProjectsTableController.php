<?php

namespace App\Http\Controllers;

use App\Models\ProjectsTable;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsTableController extends Controller
{
    /**
     * Tampilkan daftar proyek.
     */
    public function index()
    {
        $projects = ProjectsTable::with('client')->get();
        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Tampilkan form tambah proyek.
     */
    public function create()
    {
        $clients = Clients::all(); // Ambil data client untuk select option
        return view('admin.projects.create', compact('clients'));
    }

    /**
     * Simpan data proyek baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'description' => 'required|string',
            'tech_stack' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|in:Complete,Ongoing,Pending',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload Gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
        }

        ProjectsTable::create([
            'title' => $request->title,
            'client_id' => $request->client_id,
            'description' => $request->description,
            'tech_stack' => $request->tech_stack,
            'date' => $request->date,
            'status' => $request->status,
            'image' => $imagePath,
        ]);

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    /**
     * Tampilkan detail proyek.
     */
    public function show(ProjectsTable $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Tampilkan form edit proyek.
     */
    public function edit(ProjectsTable $project)
    {
        $clients = Clients::all();
        return view('admin.projects.edit', compact('project', 'clients'));
    }

    /**
     * Update data proyek.
     */
    public function update(Request $request, ProjectsTable $project)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'client_id' => 'required|exists:clients,id',
            'description' => 'required|string',
            'tech_stack' => 'required|string|max:255',
            'date' => 'required|date',
            'status' => 'required|in:Complete,Ongoing,Pending',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Jika ada gambar baru, hapus yang lama
        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $project->image = $request->file('image')->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'client_id' => $request->client_id,
            'description' => $request->description,
            'tech_stack' => $request->tech_stack,
            'date' => $request->date,
            'status' => $request->status,
        ]);

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    /**
     * Hapus data proyek.
     */
    public function destroy(ProjectsTable $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil dihapus.');
    }
}
