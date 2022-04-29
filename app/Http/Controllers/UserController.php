<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

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
        $types = Type::where('libelle', '<>', "ADMIN")->get();
        $utilisateurs = User::paginate(7);
        return view('espace_admin.gestion_utilisateur', compact(['utilisateurs', 'types']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_depuis_csv(Request $request)
    {
        if($request->hasFile('url')) {
            //get filename with extension
            $filenamewithextension = $request->file('url')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('url')->getClientOriginalExtension();

            if ($extension != "csv") {
                return redirect()->back()->withErrors("Pas la bonne extension");
            }

            Excel::import(new UsersImport, request()->file('url'));
            return redirect()->back()->with('success','Utilisateurs importés avec Succès');
        }
        return redirect()->back()->withErrors("Pas de fichier sélectionné");
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
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        $user = new User();


        $user->save();
        return redirect()->back();
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
        return redirect()->route('gestion_utilisateur');
    }
}
