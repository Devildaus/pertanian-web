<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'email' => 'required',
        'jenis_kelamin' => 'required',
        'subject' => 'required',
    ]);

    Contact::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'jenis_kelamin' => $request->jenis_kelamin,
        'subject' => $request->subject,
    ]);

    return redirect()->back()->with('success', 'Thank you for your submission!');
}

    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.pesan.index', compact('contacts'));
    }
    public function destroy(Contact $contact)
    {
        $this->authorize('admin');

        // Additional logic for deleting contact specific fields, if needed
        // For example, if the Contact model has an 'image' field that needs to be deleted
        // you can use the following code:
        // if ($contact->image) {
        //     Storage::delete($contact->image);
        // }

        // Delete the contact
        $contact->delete();

        return redirect('/dashboard/pesan')->with('success', 'Contact Has Been Deleted!');
    }
}