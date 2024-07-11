@extends('layouts.admin')
@include('partials.navbar')
@section('content')
<section class="d-flex flex-wrap my-5">
    <h1 class="m-3 text-center col-12">
        {{ $project->title }}
    </h1>
    <div class="col-12 d-flex">
        <div class="text-center col-6">{{ $project->description }}</div>
        <div class="col-6 overflow-hidden" style="object-fit: cover">
            <img src="{{ $project->img }}" alt="">
        </div>
    </div>
</section>
@endsection
