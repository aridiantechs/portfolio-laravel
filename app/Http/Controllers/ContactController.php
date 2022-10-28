<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:1|max:25',
            'email' => 'required|email|unique:users',
            'subject' => 'required|min:1|max:25',
            'message'=>'nullable|required',
        ]);
        $message = new Contact;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->subject = $request->input('subject');
        $message->message = $request->input('message');
        $message->save();
        Mail::to('your_email@gmail.com')->send(new ContactMail($message));
        $request->session()->flash('success', 'Message Sent Successfully.');
        return redirect('/#contact-section');
    }
}
