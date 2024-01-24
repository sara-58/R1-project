<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Traits\Common;
use Carbon\Carbon;


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
        
        $data['active'] = isset($request['active']);
        $data['email_verified_at'] = now();

        User::create($data);

        return 'done';
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
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'fullName' => ['required', 'string', 'max:255'],
            'userName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $data['active'] = isset($request->active);

        User::where('id', $id)->update($data);

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
