<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $datas = User::all();

        return view('dashboard/index', compact('datas'));
    }

    public function create()
    {
        $roles = Role::all();

        return view('dashboard/create', compact('roles'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $avatarPath = null;

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->storePublicly('avatars', 'public');
        }

        $user = new User();
        $user->name = $validatedData['name'];
        $user->role = $validatedData['role'];
        $user->password = Hash::make($validatedData['password']);
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->avatar = $avatarPath;
        $user->save();

        return redirect('/')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $data = User::find($id);
        $roles = Role::all();

        return view('dashboard/edit', compact('data', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'password' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $avatarPath = null;

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatarPath = $avatar->storePublicly('avatars', 'public');
        }

        $user = User::find($id);
        $user->name = $validatedData['name'];
        $user->role = $validatedData['role'];
        $user->password = Hash::make($validatedData['password']);
        $user->email = $validatedData['email'];
        $user->phone = $validatedData['phone'];
        $user->address = $validatedData['address'];
        $user->avatar = $avatarPath;
        $user->save();

        return redirect('/')->with('success', 'Data pengguna berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'Data pengguna berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Data pengguna tidak ditemukan.');
        }
    }
}