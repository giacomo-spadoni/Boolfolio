@extends('layouts.admin')
@include('partials.navbar')
@section('content')
    <form action="{{ route('admin.Project.store') }}" method="POST">
        @csrf
        <div class="w-50 m-5">
            <label for="formGroupExampleInput" class="form-label">Title</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Project Title" name="title">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Description</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Description"
                name="description">
        </div>
        <div class="w-50 m-5">
            <label for="formGroupExampleInput2" class="form-label">Image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Img URL" name="img">
        </div>

        <button type="submit"> AGGIUNGI </button>
    </form>
@endsection
