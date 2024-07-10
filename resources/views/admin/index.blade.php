@extends('layouts.admin')
@include('partials.navbar')
@section('content')
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
                        <td class="w-25">{{ $item['title'] }}</td>
                        <td class="w-50">{{ $item['description'] }}</td>
                        <td>
                            <div class="d-flex">
                                
                            <a href="Project/{{$item->id}}" style="text-style:none;">
                                <button type="submit" class="badge" style="background-color: black; color: rgb(13, 65, 250)">
                                    More details
                                </button>
                            </a> 
                                <a href="Project/{{ $item->id }}/edit" style=" text-style:none;">
                                    <button type="submit" class="badge"
                                        style="background-color: black; color: rgb(11, 197, 52)">
                                        Modify
                                    </button>
                                </a>
                                <form action="{{ route('admin.Project.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge" style="background-color: black; color: red">Delete
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
