<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use App\Http\Requests\StoreFAQRequest;
use App\Http\Requests\UpdateFAQRequest;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::paginate(10);
        return view('faqs')->with('faqs', $faqs);
    }

    public function index_admin()
    {
        $faqs = FAQ::paginate(7);
        return view('espace_admin.gestion_faq')->with('faqs', $faqs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Envoi sur le formulaire de création
        return view('faq.form_ajout_faq');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFAQRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFAQRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show(FAQ $id)
    {
        //Permet de visualiser une faq
        $faq = FAQ::find($id);
        return view('faq')->with('faq', $faq);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = FAQ::find($id);
        return view('faq.form_upd_faq', compact("faq"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFAQRequest  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFAQRequest $request, FAQ $fAQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FAQ::destroy($id);
        return redirect()->back();
    }

    //retour à la page des faqs
    public function retourne_faqs()
    {
        $faqs = FAQ::all();
        return view('faqs', compact('faqs'));
    }

    //retour à la page de la faq en cours
    public function retourne_faq($id)
    {
        $faq = FAQ::find($id);
        return view('faq', compact('faq'));
    }
}
