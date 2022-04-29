<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Partenaire;
use Illuminate\Http\Request;

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
        $evnmt = Evenement::all()->where('est_cloturer', '0')->first();
        return view('espace_admin.gestion_evenement', compact(['evenements', 'evnmt']));
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
    public function store(Request $request)
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
        $evenement->est_cloturer=0;

        $evenement->save();
        return redirect()->back()->with('success','l\'évenement est créé');
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
    public function update(Request $request, $id)
    {
        $evenement = Evenement::find($id);
        $evenement->libelle=$request->get('libelle');
        $evenement->date_debut=$request->get('date_debut');
        $evenement->date_fin=$request->get('date_fin');
        $evenement->date_reunion_primo=$request->get('date_reunion_primo');
        $evenement->duree_passage=$request->get('duree_passage');
        $evenement->lieu=$request->get('lieu');
        $evenement->date_inscription=$request->get('date_inscription');
        $evenement->date_fin_inscription=$request->get('date_fin_inscription');
        $evenement->est_cloturer=0;

        $evenement->save();
        return redirect()->back()->with('success','l\'évenement est modifié');
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
        return redirect()->route('evenements');

    }

    //retour à la page d'accueil
    public function retourneAccueil()
    {
        $evenement = Evenement::all()->where('est_cloturer', 0)->first();
        $partenaires = Partenaire::all();
        if (empty($evenement)) {
            return view('accueil', compact('partenaires'));
        }else {
            return view('accueil', compact('evenement', 'partenaires'));
        }

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
