<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        return view('confirm', compact('contact'));
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function login()
    {
        return view('register');
    }

    public function register()
    {
        return view('login');
    }

    public function admin()
    {
        return view('admin');
    }

}
