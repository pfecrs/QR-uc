<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
        
    public function adminlogin()
    {
        return view('Backoffice.login');
    }

    public function handleAdminLogin(Request $request)
    {
        $login=$request->login;
        $password=$request->password;
        $admin = admin::where('login', '=', $login)
        ->where('password', $password)
        ->first();
        // dd($prof);
        if($admin !== null){
            Session::put('admin', $admin);
            return redirect()->route('showListeDevoirs');     
        }
        else{
            return redirect()->back();
        }

    }

    public function handleAdminLogout(){
        if (session()->has('admin')){
            session()->flush();
            return redirect()->route('showAdminLogin');
        }
        return redirect()->route('showAdminLogin');
     }
       

    
}
