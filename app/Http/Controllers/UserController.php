<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        $users = User::when($request->search, function ($query) use ($request) {
            return $query->where('name', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%');
        })->paginate(3)->appends(['search' => $request->search]);
        return view('users.user', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create User';
        return view('users.formUser', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // pakai validasi
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',

        ]);
        $imageName = null;
        if ($request->photo) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->storeAS('public/images', $imageName);
        }

        // tanpa validasi
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'photo_profile' => $imageName
        ]);
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('users.userShow', ['id' => $user->name]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $title = 'Edit User';
        return view('users.editUser', compact('user', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // validasi
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
        ]);


        if ($request->photo) {
            $imageName = time() . '.' . $request->file('photo')->extension();
            $request->photo->storeAS('public/images', $imageName);

            // deleted old photo
            $path = public_path('storage/images/' . $user->photo_profile);
            if (File::exists($path)) {
                File::delete($path);
            }
            $user->photo_profile = $imageName;
            $user->update();
        }



        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password != "") {
            $user->password = Hash::make($request->password);
        }

        $user->address = $request->address;
        $user->update();
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // cara pertama
        // $user->delete();
        // return redirect()->route('users.index');

        // cara kedua
        try {
            $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully');
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
