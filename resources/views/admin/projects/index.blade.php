@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">{{ $project->title }}</div>
                        <div class="card-body">{{ $project->description }}</div>
                        <div class="buttons d-flex">
                            <a type="button" class="btn btn-primary" href="{{ route('admin.projects.show', $project->id) }}">Details</a>
                            <a type="button" class="btn btn-success" href="{{ route('admin.projects.edit', $project->id) }}">Edit</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<style>

    .buttons{
        padding: 10px
    }
    form{
        margin-block-end: 0!important;
    }
</style>