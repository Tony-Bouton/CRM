<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use Illuminate\Http\Request;

class Facture_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('factures.facture_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'string',
            'indentifiant' => 'string',
            'montantHT' => 'numeric',
            'tva' => 'numeric',
            'montantTtc' => '',
            'titre' => 'string',

        ]);


        $identifiant = date($request->date) . '-' . $request->id . '-' . rand(0, 9) . rand(0, 9);
        $montantTtc = $request->montantHT * (1 + $request->tva / 100);


        $facture =  [
            'date' => $request->date,
            'identifiant' => $identifiant,
            'montantHT' => $request->montantHT,
            'tva' => $request->tva,
            'montantTtc' => $montantTtc,
            'titre' => $request->titre,

        ];

        Facture::create($facture);

        return view('factures.facture_create_success', ['facture' => $facture]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
