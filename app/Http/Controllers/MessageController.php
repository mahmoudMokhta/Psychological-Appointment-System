<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $messages = Message::all();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Message::create([
            'sender_id' => auth()->id(),
            'receiver_id' => $request->input('receiver_id'),
            'content' => $request->input('content'),
        ]);


        return redirect()->route('messages.index')->with('success', 'تم إرسال الرسالة بنجاح.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {

        return view('messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {

        return view('messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {

        $message->update([
            'content' => $request->input('content'),
        ]);


        return redirect()->route('messages.index')->with('success', 'تم تحديث الرسالة بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {

        $message->delete();


        return redirect()->route('messages.index')->with('success', 'تم حذف الرسالة بنجاح.');
    }
}
