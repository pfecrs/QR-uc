<?php

namespace App\Http\Controllers;

use App\Models\Devoir;
use App\Models\Etudiant;
use App\Models\Professeur;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $professeur->login = $request->login;
        $professeur->password = $request->password;
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
        $professeur->login = $request->login;
        $professeur->password = $request->password;
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
    public function destroy(Request $request)
    {
        $id=$request->id;
        professeur::where('id', $id)->delete();
        return redirect()->route('showListeProfesseurs')
                        ->with('success','Professeur supprimé avec succès');
    }

    public function scanQR(Request $request)
    {
        $app_url=env('APP_URL').'/';
        $url=url()->current();
        $static_link = Str::after($url, $app_url);
       // dd($static_link);

        // $devoir=Devoir::where('id', $static_link)->first();
        //dd($devoir);
        $etudiant=Etudiant::where('id', $static_link)->first();
        $prof=Session::get('prof');
        // dd($prof);
        $values=Session::get('inputs');
        if ($etudiant !== null && $prof !== null){
            
            return view('Frontoffice.profs.home', compact('etudiant','values'));
            
        }
        else{
            return redirect()->route('showHome');
        }
    }

    public function handleLogin(Request $request){

       

        $login=$request->login;
        $password=$request->password;
        $matiere=$request->matiere;
        $niveau=$request->niveau;


        $inputs=array($matiere,$niveau);
        Session::put('inputs', $inputs);
        //dd($inputs);
        $prof = Professeur::where('login', '=', $login)
        ->where('password', $password)
        ->first();
        // dd($prof);
        if($prof !== null){
            Session::put('prof', $prof);
            $values=Session::get('inputs');
           //dd($values);
            return redirect()->route('showHome',$values);     
        }
        else{
            return redirect()->back();
        }



    }


    public function insertNote(Request $request)
    {
        $id=$request->id;

        $prof=Session::get('prof');
        //dd($prof);
        //$id_prof=0;


        $etudiant=Etudiant::where('id', $id)->first();
        //$professeur=Professeur::where('id',$id_prof)->first();
        $devoir= new Devoir;
        $devoir->matiere = $request->matiere;
        $devoir->type = $request->type;
        $devoir->note = $request->note;
        $devoir->num_cin_etudiant= $etudiant->num_cin;
        $devoir->num_cin_correcteur=$prof->num_cin;
        $devoir->save();

        return redirect()->route('showHome');
    }

    

    public function handleLogout(){
        if (session()->has('prof')){
            session()->flush();
            return redirect()->route('loginProf');
        }
        return redirect()->route('loginProf');
     }


}
