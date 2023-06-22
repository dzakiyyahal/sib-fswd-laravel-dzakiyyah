@extends('template')

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="font-weight-bold">Ubah pengguna</h1>
        <a class="btn btn-primary" href="{{ url('dashboard/') }}">Kembali</a>

        <form action="{{ url('dashboard/edit-user/' . $data['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input value="{{ $data['name'] }}" name="name" type="text" placeholder="Nama lengkap"
                    class="form-control">
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Role</label>
                    <select name="role_id" class="form-control">
                        <option value="{{ $data['role']['id'] }}" selected>
                            {{ $data['role']['name }}
                        </option>
                        <option disabled>
                            ==============
                        </option>
                        @foreach ($roles as $role)
                            <option value="{{ $role['name'] }}">
                                {{ $role['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col form-group">
                    <label>Password</label>
                    <input value="{{ $data['password'] }}" name="password" type="password" placeholder="Password"
                        class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Email</label>
                    <input value="{{ $data['email'] }}" name="email" type="email" placeholder="Email"
                        class="form-control">
                </div>
                <div class="col form-group">
                    <label>Telp</label>
                    <input value="{{ $data['phone'] }}" name="phone" type="number" placeholder="Telp"
                        class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Alamat lengkap</label>
                <textarea name="address" class="form-control" rows="3">{{ $data['address'] }}</textarea>
            </div>
            <div class="form-group">
                <label>Unggah foto</label>
                <input value="{{ $data['avatar'] }}" name="avatar" type="file" class="form-control-file">
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
@endsection
