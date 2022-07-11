<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $entreprise = Entreprise::all();

        return view('entreprises.entreprise_index', ['entreprise' => $entreprise]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entreprises.entreprise_create');
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
                'name' => 'required|string',
                'statut' => 'required|string',
                'siren' => 'required|string',
                'email' => 'email:rfc,dns',
                'tel' => 'required|string',
            ]
        );

        $entreprise = [
            'name' => $request->name,
            'statut' => $request->statut,
            'siren' => $request->siren,
            'email' => $request->email,
            'tel' => $request->tel



        ];




        Entreprise::create($entreprise);


        return view('entreprises.entreprise_create_success', ['contact' => $entreprise]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $entreprise = Entreprise::findorfail($id);

        return view('entreprises.entreprise_show', ['entreprise' => $entreprise]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $entreprise = Entreprise::findorFail($id);


        return view('entreprises.entreprise_edit', ['entreprise' => $entreprise]);
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

        $entreprise = Entreprise::findorFail($id);


        $entreprise->name = $request->name;
        $entreprise->statut = $request->statut;
        $entreprise->siren = $request->siren;
        $entreprise->email = $request->email;
        $entreprise->tel = $request->tel;


        $entreprise->save();

        return view('entreprises.entreprise_edit_success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entreprise = Entreprise::findorFail($id);

        $entreprise->delete();



        return view('entreprises.entreprise_delete_success');
    }
}
