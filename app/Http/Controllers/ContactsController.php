<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;


class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $contact = Contact::all();

        return view('contacts.contacts_index', ['contact' => $contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.contacts_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'lastname' => 'required|string|max:20',
                'firstname' => 'required|string|max:20',
                'tel' => 'required|string',
                'email' => 'email:rfc,dns'
            ]
        );

        $contact = [
            'lastname' => $request->lastname,
            'firstname' => $request->firstname,
            'tel' => $request->tel * 2,
            'email' => $request->email



        ];


        Contact::create($contact);


        return view('contacts.contact_create_success', ['contact' => $contact]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $contact =  Contact::findOrFail($id);

        return view('contacts.showContact', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Contact::findOrFail($id);

        /*  $user->lastname = ['lastname'=>$lastname]; */

        return view('contacts.update', ['contact' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $user = Contact::findOrFail($id);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->tel = $request->tel;
        $user->email = $request->email;

        $user->save();

        return view('contacts.modif_success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $contact = Contact::findOrFail($id); // Récupération d'un contact par son id
        /* dd($contact->id); */
        $contact->delete(); // Suppression du contact

        return view('contacts.contacts_deleted');
    }
}
