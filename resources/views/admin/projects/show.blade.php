@extends('layouts.main')

@section('title', 'Project Details')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">{{ __('Project Details') }}</h2>
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Project') }}: {{ $project->title }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            @if($project->thumb)
                                <img src="{{ $project->thumb }}" class="img-fluid mb-3" alt="Project Image" style="height: 100%;">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <p><strong>{{ __('Title') }}:</strong> {{ $project->title }}</p>
                            <p><strong>{{ __('Description') }}:</strong> {{ $project->description }}</p>
                            <p><strong>{{ __('Start Date') }}:</strong> {{ $project->start_date }}</p>
                            <p><strong>{{ __('End Date') }}:</strong> {{ $project->end_date }}</p>
                            <p><strong>{{ __('Technologies') }}:</strong> {{ $project->technologies }}</p>
                            <p><strong>{{ __('Status') }}:</strong> {{ $project->status }}</p>
                            <p><strong>{{ __('Documentation') }}:</strong> <a href="{{ $project->documentation }}" target="_blank"> {{ __('View Documentation') }}</a></p>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    @auth
                    <a href="{{ route('guest.home') }}" class="btn btn-primary me-2">{{ __('Back to Home') }}</a>
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-secondary ">{{ __('Back to Projects List') }}</a>
                        @else
                        <a href="{{ route('guest.home') }}" class="btn btn-primary">{{ __('Back to Home') }}</a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
