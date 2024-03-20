@extends('layouts.main')

@section('title', 'Projects Tab')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">{{ __('Projects') }}</h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Projects List') }}</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Technologies</th>
                                    <th>Status</th>
                                    <th>Preview</th>
                                    <th>Documentation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                <tr>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ Str::limit($project->slug, 20, '...') }}</td>
                                    <td>{{ $project->description }}</td>
                                    <td>{{ $project->start_date }}</td>
                                    <td>{{ $project->end_date }}</td>
                                    <td>{{ $project->technologies }}</td>
                                    <td>{{ $project->status }}</td>
                                    <td>
                                        <img src="{{ $project->thumb }}" alt="Preview" class="img-thumbnail" style="max-width: 100px;">
                                    </td>
                                    <td>
                                        <a href="{{ $project->documentation }}" target="_blank">{{ __('Documentation') }}</a>
                                    </td>
                                    <td>
                                        <div id="icons-container" class="d-flex align-items-center">

                                            <a href="{{ route('admin.projects.show', $project) }} title="View"><i class="fas fa-eye text-primary me-3"></i></a>
                                            <a href="#" title="Edit"><i class="fas fa-pencil-alt text-warning me-3"></i></a>
                                            <a href="#" title="Delete"><i class="fas fa-trash-can"></i></a>
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
