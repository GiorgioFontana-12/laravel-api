@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <h1>Crea un nuovo progetto</h1>

    <form action="{{route ("admin.projects.store")}}" method="POST" class="needs-validation">
        @csrf

        <label for="name">Titolo</label>
        <input class="form-control" type="text" name="name" id="name" value="">
        
        <label for="content">Contenuto</label>
        <textarea class="form-control" name="content" id="content" cols="50" rows="10"></textarea>
        
        <label for="image">URl img</label>
        <input class="form-control" type="text" name="image" id="image" value="">
        
        <input type="submit" class="form-control btn btn-primary my-4" value="Crea Progetto">

    </form>
</div>

@endsection