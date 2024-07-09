@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <a href="{{ route('admin.Project.index') }}">Prova index</a>
        <a href="{{ route('admin.Project.create') }}">Prova create</a>
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
    </div>
@endsection
