<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Retourne la liste de tous les evenements
    public function index()
    {
        $utilisateurs = User::all();
        return view('espace_admin.gestion_utilisateur', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user')->with('user', $user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show_admin()
    {
        // APPLIQUER LE MIDDLEWARE ADMIN
        return view('espace_admin.dashboard');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::destroy($id);
        return redirect()->route('Accueil');
    }
}
