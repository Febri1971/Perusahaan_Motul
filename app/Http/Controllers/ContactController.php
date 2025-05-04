<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect('/contact')->with('success', 'Pesan Anda berhasil dikirim!');
    }
}
