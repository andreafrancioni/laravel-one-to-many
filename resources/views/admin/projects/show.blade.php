@extends('layouts.app')

@section('content')

<section class="show">
    <div class="container">
        <div class="row">
            <h2>{{$project->title}}</h2>
            <div class="row">
                <img src="{{$project->thumb}}" alt="">
                <p>{{$project->description}}</p>
                <span>{{$project->creation_date}}</span>
                <span>{{$project->type}}</span>
                <div class="buttons d-flex">
                    <a type="button" class="btn btn-primary" href="{{route('admin.projects.index')}}">Back</a>
                    <a type="button" class="btn btn-success" href="{{route('admin.projects.edit', $project->id)}}">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<style>

    .show{

        margin-bottom: 100px;

        img{
            width:200px;
        }

        .buttons{
        padding: 10px
    }
    form{
        margin-block-end: 0!important;
    }
    }

</style>