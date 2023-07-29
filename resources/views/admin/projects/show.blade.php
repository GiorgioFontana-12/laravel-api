@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-conntent-between">
        <h1>{{$project->name}}</h1>
        <p>{{$project->content}}</p>
        <img src="{{$project->image}}" alt="{{$project->name}}">

    </div>
</div>

@endsection