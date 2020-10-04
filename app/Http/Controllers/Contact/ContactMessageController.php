<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactMessageController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {

        $data = request()->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required',
        ]);

        Mail::to('estaterpack@gmail.com')->send(new ContactMessageMail($data));

        return back()->with('success',"Terimakasih sudah mengirimkan pesan kepada kami!");
    }
}
