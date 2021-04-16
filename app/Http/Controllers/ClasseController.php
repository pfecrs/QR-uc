<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classe::all();

        return view('Backoffice.classe.liste', compact('classes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backoffice.classe.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $classe = new Classe;
        
        $classe->nom = $request->nom;
        $classe->departement = $request->departement;
        $classe->niveau = $request->niveau;
      
        $classe->save();
   
        return redirect()->route('showListeClasses')
                        ->with('success','classe créé avec succès');
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
        $classe= Classe::where('id', $id)->first();
       
        return view('Backoffice.classe.edit', compact('classe'));
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
        //$classe= classe::where('id', $id)->first();

        $classe= Classe::find($id);
        $classe->nom = $request->nom;
        $classe->departement = $request->departement;
        $classe->niveau = $request->niveau;
        
        
        $classe->save();

        return redirect()->route('showListeclasses')
            ->with('success', 'classe mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;
        Classe::where('id', $id)->delete();
        return redirect()->route('showListeClasses')
                        ->with('success','Classe supprimé avec succès');
    }
}
