<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partenaires = Partenaire::paginate(10);
        return view('Accueil')->with('partenaires', $partenaires);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partenaire.form_ajout_partenaire');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePartenaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartenaireRequest $request)
    {
        $partenaire= new Partenaire();
        $partenaire->libelle=$request->get('libelle');
        $partenaire->lien=$request->get('lien');
        $partenaire->url_logo=$request->get('url_logo');
        $partenaire->description=$request->get('description');

        $partenaire->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $id)
    {
        $partenaire = Partenaire::find($id);
        return view('Accueil')->with('partenaire', $partenaire);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $id)
    {
        $partenaire = Partenaire::find($id);
        return view('partenaire.form_upd_partenaire', compact("partenaire"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartenaireRequest  $request
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartenaireRequest $request, Partenaire $id)
    {
        $partenaire = Partenaire::find($id);
        $partenaire->libelle=$request->get('libelle');
        $partenaire->lien=$request->get('lien');
        $partenaire->url_logo=$request->get('url_logo');
        $partenaire->description=$request->get('description');

        $partenaire->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $id)
    {
        $partenaire = Partenaire::find($id);
        Partenaire::destroy($partenaire);
        return redirect()->back();
    }
}
