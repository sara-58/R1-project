<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;



class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $messages = Message::get();
        return view('dashboard.messageList', compact('messages'));
    }

     
    public function send(Request $request)
     
    {
        $message = $request->validate(
            [
                'firstName' => 'required|string|max:50',
                'lastName' => 'required|string|max:50',
                'email' => 'required|email',
                'messageContent' => 'required|string',
            ]
            );

        Message::create($message);


        Mail::to('sara@example.com')->send(new ContactMail($message));

        return 'Message sent successfully';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = Message::findOrFail($id);
        if (!$message->readed) {
            $message->update(['readed' => 1]);
        }

        $unreadCount = Message::where('readed', 0)->count();

        return view('dashboard.showMessage', compact('message', 'unreadCount'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Message::where('id', $id)->delete();
        return redirect()->route('messages');
    }
}
