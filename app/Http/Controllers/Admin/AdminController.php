<?php

namespace App\Http\Controllers\Admin;

use App\Administrateur;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index()
    {
        return view('admin.admin.index' , ['administrateurs' => Administrateur::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin.cree' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // //dd($request);
        // $validatedData=$request->validate([
        //     'nom' => 'required|min2',
        //     'prenom' => 'required|min2',
        //     'email' => 'required|email',
        //     'ville' =>'required',
        //     'mdp' =>'required'        
        //     ]);
            $administrateur = new Administrateur;
            $administrateur->nom=$request->nom;
            $administrateur->prenom=$request->prenom;
            $administrateur->email=$request->email;
            $administrateur->mdp=Hash::make($request->mdp);
            $administrateur->role=$request->role;
            $administrateur->ville=$request->ville;

            $administrateur->save();
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Administrateur::find($id);
        return view('admin.admin.detail' , ['administrateur' => $admin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        //
    }
}
