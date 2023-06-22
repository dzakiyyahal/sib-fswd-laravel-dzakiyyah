@extends('template')

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="font-weight-bold">Tambah pengguna</h1>
        <a class="btn btn-primary" href="{{ url('dashboard/') }}">Kembali</a>

        <form action="{{ url('dashboard/add-user') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input name="name" type="text" placeholder="Nama lengkap" class="form-control">
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Role</label>
                    <select name="role" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role['name'] }}">
                                {{ $role['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col form-group">
                    <label>Password</label>
                    <input name="password" type="password" placeholder="Password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <label>Email</label>
                    <input name="email" type="email" placeholder="Email" class="form-control">
                </div>
                <div class="col form-group">
                    <label>Telp</label>
                    <input name="phone" type="number" placeholder="Telp" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label>Alamat lengkap</label>
                <textarea name="address" class="form-control" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label>Unggah foto</label>
                <input name="avatar" type="file" class="form-control-file">
            </div>

            <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </div>
@endsection
