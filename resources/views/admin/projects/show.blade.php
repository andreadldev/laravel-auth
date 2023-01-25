@extends('layouts.admin')
@section('content')
<div class="p-3">
    <a href="{{route('admin.projects.index')}}">
        <i class="fs-3 pb-3 fa-solid fa-circle-arrow-left"></i>
    </a>
<h2>{{ $project->id }}. {{ $project->name }}</h2> 
<h6>({{ $project->slug }})</h6>
<small>{{ substr($project->created_at, 0, -9)}}</small>
        <p>{{ $project->description }}</p>
</div>
@endsection