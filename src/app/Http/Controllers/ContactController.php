<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function save(Request $request)
    {
        $gender = $request->input('gender');
        // ここで性別の処理を行う
        return "選択された性別は: " . $gender;
    }

    public function thanks()
    {
        return view('thanks');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function showConfirmation()
    {
        return view('confirm');

    }

    public function admin()
    {
        return view('admin');
    }
}