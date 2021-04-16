<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('Frontoffice.profs.home');

    }
    public function form(Request $request){

        $note = new Note;
        
        $note->valeur = $request->note;
        $note->matiere = $request->matiere;
        $note->id_etudiant =1;
        $note->id_professeur = 1;
        $note->id_classe =1;
        
        $note->save();

           return redirect()->back();
        // return redirect()->route('showListenote')
        //                 ->with('success','note créé avec succès');
    }
        
       

    
}
