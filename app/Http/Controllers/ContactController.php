<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'department' => 'required|string',
            'comment' => 'required|string',
        ]);

        // Store data in the database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'department' => $request->department,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
