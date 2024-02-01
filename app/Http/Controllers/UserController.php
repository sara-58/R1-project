<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Traits\Common;

class UserController extends Controller
{
    use Common;

    private $columns = [
        'fullName',
        'userName',
        'email',
        'password',
        'active',
        'email_verified_at',
    ];
 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('dashboard.userList', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        

        User::create([
            'fullName' => $data['fullName'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => $data['active'] ?? true,
            'email_verified_at'=>now(),
        ]);

        return 'User added successfully';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.editUser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $data = $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $id],
            'password' => ['required', 'string', 'min:8'],
        ]);


        User::where('id', $id)->update([
            'fullName' => $data['fullName'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => $data['active'] ?? true,
        ]);

        return redirect()->route('users');
    
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::where('id', $id)->delete();
        return redirect()->route('users');
    }
}
