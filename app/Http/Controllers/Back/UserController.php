<?php

namespace App\Http\Controllers\Back;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of users.
     */
    public function index()
    {
        if (auth()->user()->role == 1) {
            $users = User::get();
        } else {
            $users = User::whereId(auth()->user()->id)->get();
        }

        return view('back.user.index', [
            'users' => $users
        ]);
    }

    /**
     * Store a newly created user.
     */
    public function store(UserRequest $request)
    {
        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);
        User::create($data);

        return back()->with('success', 'User has been created');
    }

    /**
     * Update the specified user.
     */
    public function update(UserUpdateRequest $request, string $id) // Tambahkan $id
    {
        $user = User::find($id); // Ambil data user berdasarkan $id
        $data = $request->validated();

        // Update password hanya jika diisi
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data); // Update data user

        return back()->with('success', 'User has been updated'); // Ubah pesan
    }

    /**
     * Remove the specified user.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();

        return back()->with('success', 'User has been deleted');
    }
}
