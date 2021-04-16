<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Professeur;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $etudiants=array();
        $professeurs=array();
        $classes=array();
        foreach($notes as $note){
            $id=$note->id_etudiant;
            $etudiant= Etudiant::where('id', $id)->first();
            //dd($etudiant);
            
            array_push($etudiants,$etudiant);
           
        }
        foreach($notes as $note){
            $id=$note->id_professeur;
            $professeur= Professeur::where('id', $id)->first();
            //dd($etudiant);
            
            array_push($professeurs,$professeur);
           
        }
        foreach($notes as $note){
            $id=$note->id_classe;
            $classe= Classe::where('id', $id)->first();
            //dd($etudiant);
            
            array_push($classes,$classe);
           
        }
        //dd($classes);
         //dd($professeurs);
         //$etudiants= Etudiant::where('id', $id)->all();
         //dd($etudiants);
        return view('Backoffice.note.liste', compact('notes','professeurs','etudiants','classes'));
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
