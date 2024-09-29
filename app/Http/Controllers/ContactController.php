<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Import the Mail facade
use App\Mail\ContactMail; // Ensure you have created a ContactMail mailable

class ContactController extends Controller
{
    public function index(){
        return view('home'); // Make sure this view exists
    }

    public function create(Request $request){
        // Validate the incoming request data
        $content = $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email',
            'message' => 'required|max:200',
        ]);

        // Prepare the email data
        $details = [
            'name' => $content['name'],
            'email' => $content['email'],
            'message' => $content['message'],
        ];

        try {
            // Send the email
            Mail::to('your mail here ')->send(new ContactMail($details)); // Change to your actual recipient email
        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Failed to send message: ' . $e->getMessage());
        }

        // Optional: Store the validated data in the database
        Contact::create($content);

        // Redirect back to the home page with a success message
        return redirect()->route('home')->with('success', 'Message sent successfully!');
    }
}
