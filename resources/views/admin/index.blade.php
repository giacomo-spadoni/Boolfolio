@extends('layouts.admin')

@section('content')
    {{-- <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <section class="container p-2 my-5">
        <table class="w-100">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Comics</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $i => $item)
                    <tr style="border-bottom: 0.5px solid rgb(245, 245, 245)">
                        <th scope="row">#{{ $i + 1 }}</th>
                        <td class="w-25 p-1"><img src="{{ $item['img'] }}"
                                class="card-img-top object-fit-fill border rounded" alt="..."
                                style="height: 100px; width :100px"></td>
                        <td class="w-50">{{ $item['title'] }}</td>
                        <td>{{ $item['description'] }}</td>
                        <td>
                            <span>
                                colonna per i tasti modifica e delete
                            </span>
                            <div class="d-flex">
                                {{--
                            <a href="comic/{{$item->id}}" style="text-style:none;">
                                <button type="submit" class="badge" style="background-color: black; color: rgb(13, 65, 250)">
                                    More details
                                </button>
                            </a>  --}}
                                <a href="Project/{{ $item->id }}/edit" style=" text-style:none;">
                                    <button type="submit" class="badge"
                                        style="background-color: black; color: rgb(11, 197, 52)">
                                        Modify
                                    </button>
                                </a>
                                {{-- <form action="{{ route('comic.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="badge" style="background-color: black; color: red">Delete</a>
                            </form> --}}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
