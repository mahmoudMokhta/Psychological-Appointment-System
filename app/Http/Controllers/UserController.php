<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('dashboard.users.index', compact('users'));
        // return $users;
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'phoneNumber' => 'required|integer',
            'role' => 'in:admin,patient,doctor',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('user_images', 'public');
            $attributes['image'] = $imagePath;
        }
        $user = User::create($attributes);
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    public function show(User $user)
    {
        // return view('users.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'required',
            'phoneNumber' => 'required|integer',
            'role' => 'in:admin,patient,doctor',
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role', 'patient');
        $user->address = $request->input('address');
        $user->phoneNumber = $request->input('phoneNumber');

        if ($request->hasFile('image')) {

            if ($user->image) {
                Storage::delete('avatars/' . $user->image);
            }

            $imagePath = $request->file('image')->store('user_images', 'public');
            $user->image = $imagePath;
        }

        $user->save();

        return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        if ($user->image) {
            Storage::delete('avatars/' . $user->image);
        }

        $user->delete();

        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
    public function search(Request $request)
    {
        $search = $request['search'];
        $users = User::where('name', 'like', '%' . $search . '%')
            ->orWhere('email', 'like', '%' . $search . '%')
            ->orWhere('phoneNumber', 'like', '%' . $search . '%')
            ->orWhere('address', 'like', '%' . $search . '%')
            ->orWhere('role', 'like', '%' . $search . '%')
            ->orderBy('created_at', 'desc')
            ->get();
        // return $users;
        return view('dashboard.users.index', compact('users'));
    }
}
