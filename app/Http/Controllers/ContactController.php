<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $phone = $request->input('phone');
        $message = $request->input('message');
        $contact = new Contact();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->phone = $phone;
        $contact->message = $message;
        $contact->save();
        //send whats app message
        $message = "Hello, I am " . $name . ". My phone number is " . $phone . ". I am interested in " . $subject . ". My message is: " . $message;
        $params = array(
            'token' => 'sjstz1qvwgh43a0t',
            'to' => '8083986916',
            'body' => $message
        );
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.ultramsg.com/instance96307/messages/chat",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($params),
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);



        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
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
    public function show()
    {
        //
        $data = Contact::all();
        return view('admin.contacts', compact('data'));
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
        //
    }
}
