@extends('admin.layout.apps')

@section('container')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Project List</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Tables</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Projects</a></li>
            </ul>
        </div>
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Projects</h4>
                        <a href="{{ route('projects.create') }}" class="btn btn-primary btn-round ms-auto">
                            <i class="fa fa-plus"></i> Add Project
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="project-table" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Client</th>
                                    <th>Tech Stack</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Image</th>
                                    <th style="width: 15%">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projects as $index => $project)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ $project->client->name ?? '-' }}</td>
                                    <td>{{ $project->tech_stack }}</td>
                                    <td>{{ \Carbon\Carbon::parse($project->date)->format('d M Y') }}</td>
                                    <td>
                                        <span class="badge 
                                            {{ $project->status == 'Complete' ? 'bg-success' : ($project->status == 'Ongoing' ? 'bg-warning' : 'bg-danger') }}">
                                            {{ $project->status }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($project->image)
                                            <img src="{{ asset('storage/' . $project->image) }}" class="img-thumbnail" width="80">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="{{ route('projects.show', $project->id) }}" class="btn btn-link btn-info btn-lg">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-link btn-primary btn-lg">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link btn-danger btn-lg" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
