@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-conntent-between">
        @foreach ($projects as $project)
            <div class="card p-0 m-4" style="width: 18rem;">
                <img src="{{$project->image}}" alt="{{$project->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$project->name}}</h5>
                    <a href="{{ route("admin.projects.show", $project) }}" class="btn btn-primary">Visualizza dettagli</a>
                </div>
            </div>
        @endforeach

    </div>



</div>

@endsection