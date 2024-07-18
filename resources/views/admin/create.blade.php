@extends('layouts.admin')
@include('partials.navbar')
@section('content')
    <form action="{{ route('admin.Project.store') }}" method="POST" enctype="multipart/form-data">
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
            {{-- <label for="formGroupExampleInput2" class="form-label">Image</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Img URL" name="img"> --}}
            <label for="img" class="form-label">Choose file</label>
            <input type="file" class="form-control" name="img" id="img" placeholder=""
                aria-describedby="imgHelper" />
            <div id="imgHelper" class="form-text">Upload an image for the curret project</div>
        </div>
        <select name="type_id" id="">
            <option value="{{ $type[0]->id }}">{{ $type[0]->name }}</option>
            <option value="{{ $type[1]->id }}">{{ $type[1]->name }}</option>
            <option value="{{ $type[2]->id }}">{{ $type[2]->name }}</option>
            <option value="{{ $type[3]->id }}">{{ $type[3]->name }}</option>
        </select>
        <div class="w-50 m-5">
            <label for="technologies">Technologies</label>
            @foreach ($technologies as $technology)
                <div class="form-check">
                    <input type="checkbox" name="technologies[]" id="technology_{{ $technology->id }}"
                        class="form-check-input" value="{{ $technology->id }}"
                        {{ is_array(old('technologies')) && in_array($technology->id, old('technologies')) ? 'checked' : '' }}>
                    <label for="technology_{{ $technology->id }}" class="form-check-label">{{ $technology->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit"> AGGIUNGI </button>
    </form>
@endsection
