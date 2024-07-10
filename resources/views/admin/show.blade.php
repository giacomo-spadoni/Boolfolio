@extends('layouts.admin')

@section('content')
    <div class="w-100">
        <h1 class="m-3 text-center">{{ $project->title }}</h1>
        <div class="text-center">{{ $project->description }}</div>
        <img class="my-3 w-100" src="{{ $project->img }}" alt="">
    </div>
@endsection
