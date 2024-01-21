<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Contact;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactMail;

// class UserController extends Controller
// {
//     public function send(Request $request)
//     {
//         $user = $request->validate(
//             [
//                 'fullName' => 'required | string| max:255',
//                 'userName' => 'required | string| max:255',
//                 'email' => 'required|email|max:255',
//                 'message'   => 'required|string',
//             ]
//         );
//     }   
//     /**
//      * Display a listing of the resource.
//      */
//     public function index()
//     {
//         //
//     }

//     /**
//      * Show the form for creating a new resource.
//      */
//     public function create()
//     {
//         User::create($user);
//         Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($user));
//         return 'data sent successfully';
//     }

//     /**
//      * Store a newly created resource in storage.
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      */
//     public function show(string $id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      */
//     public function edit(string $id)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      */
//     public function update(Request $request, string $id)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      */
//     public function destroy(string $id)
//     {
//         //
//     }
// }
