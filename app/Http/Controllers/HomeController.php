<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('Frontoffice.profs.home');

    }
    public function form(Request $request){

       $matiere=$request->matiere;
       $note=$request->note;

       

       dd($matiere,$note);

    }
}
