@extends('template')

@section('title', 'Home')

@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="font-weight-bold">Login</h1>

        <form action="{{ url('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" placeholder="Password" class="form-control-file">
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
@endsection
