<?php

namespace App\Http\Controllers;

use App\Models\Professeur;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profs = Professeur::all();

        return view('Backoffice.profs.liste', compact('profs'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backoffice.profs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeur = new Professeur;
        
        $professeur->nom = $request->nom;
        $professeur->prenom = $request->prenom;   
        $professeur->num_cin = $request->num_cin;
        $professeur->save();

             
        return redirect()->route('showListeProfesseurs')
                        ->with('success','professseur créé avec succès');
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
    public function edit(Request $request)
    {
        $id=$request->id;
        // dd($id);
        $professeur= Professeur::where('id', $id)->first();
       
        return view('Backoffice.profs.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $professeur= Professeur::find($id);
        $professeur->nom = $request->nom;
        $professeur->prenom = $request->prenom;
        $professeur->num_cin = $request->num_cin;
        $professeur->save();

        return redirect()->route('showListeProfesseurs')
            ->with('success', 'professeur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id=$request->id;
        professeur::where('id', $id)->delete();
        return redirect()->route('showListeProfesseur')
                        ->with('success','Professeur supprimé avec succès');
    }
}
