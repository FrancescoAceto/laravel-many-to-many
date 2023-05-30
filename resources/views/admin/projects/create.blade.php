@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Aggiungi un progetto</h1>
    
    <div class="mb-3">
        <label for="">TITOLO</label>
        <input type="text">
    </div>

    <div class="mb-3">
        <label for="">REPO</label>
        <input type="text">
    </div>

    <div class="mb-3">
        <label for="">DESCRIZIONE</label>
        <input type="text">
    </div>

    <div class="mb-3">
        <select name="" id="">
            @foreach ($types as $type)
               <option value="">{{$type->name}}</option>         
            @endforeach
        </select>
    </div>
    
    

    <button class="btn btn-primary">
        Aggiungi
    </button>
</div>
@endsection