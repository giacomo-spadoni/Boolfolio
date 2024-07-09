@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.Project.store')}}" method="POST">
        @csrf
        <label for="exampleTitle">Inserisci un cazzo di titolo</label>
        <input type="text" name="title" id="exampleTitle">
        <button type="submit">  AGGIUNGI </button>
    </form>

@endsection
