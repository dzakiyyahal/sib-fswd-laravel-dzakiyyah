@extends('template')

@section('title', 'Home')

@section('content')
    <div class="container">
        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

        <div class="row">
            @foreach ($products as $p)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name }}</h5>
                            <p class="card-text">{{ $p->description }}</p>
                            <p class="card-text">{{ $p->price }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
