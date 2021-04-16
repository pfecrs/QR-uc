<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();

        return view('Backoffice.etudiants.liste', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backoffice.etudiants.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $etudiant = new Etudiant;
        
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->num_cin = $request->num_cin;
        $etudiant->num_inscription = $request->num_inscription;
        $etudiant->id_classe=0;
        
        $etudiant->save();

             
        return redirect()->route('showListeEtudiant')
                        ->with('success','etudiant créé avec succès');
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
        $etudiant= Etudiant::where('id', $id)->first();
       
        return view('Backoffice.etudiants.edit', compact('etudiant'));
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
        //$etudiant= etudiant::where('id', $id)->first();

        $etudiant= Etudiant::find($id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->num_cin = $request->num_cin;
        $etudiant->num_inscription = $request->num_inscription;
        $etudiant->id_classe=0;
        
        $etudiant->save();

        return redirect()->route('showListeEtudiant')
            ->with('success', 'etudiant mis à jour avec succès');
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
        Etudiant::where('id', $id)->delete();
        return redirect()->route('showListeEtudiant')
                        ->with('success','Etudiant supprimé avec succès');
    }

    public function showQR(Request $request){
        
        // dd($request);
        $id=$request->id;
        //dd($id);

        $etudiant= Etudiant::where('id', $id)->first();
        $app_url=env('APP_URL');
        $QrCode=QrCode::size(450)->generate("$app_url/$etudiant->id");
        return view('Backoffice.etudiants.qrcode', compact('QrCode'));
    } 
}
