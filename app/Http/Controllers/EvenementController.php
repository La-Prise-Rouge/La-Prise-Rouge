<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Retourne la liste de tous les evenements
    public function index()
    {
        $evenements = Evenement::paginate(10);
        return view('Evenements')->with('evenements', $evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('evenement.formAjoutEvenement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEvenementRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEvenementRequest $request)
    {
        $evenement= new Evenement();
        $evenement->libelle=$request->get('libelle');
        $evenement->date_debut=$request->get('date_debut');
        $evenement->date_fin=$request->get('date_fin');
        $evenement->date_reunion_primo=$request->get('date_reunion_primo');
        $evenement->duree_passage=$request->get('duree_passage');
        $evenement->lieu=$request->get('lieu');
        $evenement->date_inscription=$request->get('date_inscription');
        $evenement->date_fin_inscription=$request->get('date_fin_inscription');

        $evenement->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $id)
    {
        $evenement = Evenement::find($id);
        return view('Evenement')->with('evenement', $evenement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.form_upd_evenement', compact("evenement"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEvenementRequest  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEvenementRequest $request, $evenement)
    {
        $evenement->libelle=$request->get('libelle');
        $evenement->date_debut=$request->get('date_debut');
        $evenement->date_fin=$request->get('date_fin');
        $evenement->date_reunion_primo=$request->get('date_reunion_primo');
        $evenement->duree_passage=$request->get('duree_passage');
        $evenement->lieu=$request->get('lieu');
        $evenement->date_inscription=$request->get('date_inscription');
        $evenement->date_fin_inscription=$request->get('date_fin_inscription');

        $evenement->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Evenement::destroy($id);
        return redirect()->route('Accueil');
    }

    //retour à la page d'accueil
    public function retourneAccueil()
    {
        $event = Evenement::all()->where('est_cloturer', '0')->first();
        if ($event == "") {
            $event = Evenement::all()->OrderBy('date_debut', 'DESC')->first();
            $date = now();
            if (Evenement::all()->OrderBy('date_debut', 'DESC')->where('date_debut', '<', $date)->first()) {
                $event = "Aucun Évenement à venir";
            }
        }
        $evenement = $event;
        return view('accueil', compact('evenement'));
    }

    //retour à la page des evenements
    public function retourneEvenements()
    {
        $evenements = Evenement::all();
        return view('evenements', compact('evenements'));
    }

    //retour à la page de l'evenement en cours
    public function retourneEvenement($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement', compact('evenement'));
    }

    //retour à la page de l'evenement en cours
    public function retourneEvenementEnCours()
    {
        $evenement = Evenement::all()->where('est_cloturer', '0')->first();
        return view('evenement', compact('evenement'));
    }

}
