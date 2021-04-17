<?php

namespace App\Http\Controllers;

use App\Models\Devoir;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DevoirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devoirs = Devoir::all();
        return view('Backoffice.devoirs.liste', compact('devoirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backoffice.devoirs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $devoir = new Devoir;
        
        $devoir->matiere = $request->matiere;
        $devoir->type = $request->type;
        $devoir->date_devoir = $request->date_devoir;
        $devoir->num_cin_etudiant = $request->num_cin;
        $devoir->num_cin_correcteur = 0;
        
        $devoir->save();

             
        return redirect()->route('showListeDevoirs')
                        ->with('success','devoir créé avec succès');
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
        $devoir= Devoir::where('id', $id)->first();
       
        return view('Backoffice.devoirs.edit', compact('devoir'));
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
        $devoir= Devoir::find($id);

        $devoir->matiere = $request->matiere;
        $devoir->type = $request->type;
        $devoir->date_devoir = $request->date_devoir;
        $devoir->num_cin_etudiant = $request->num_cin;
        $devoir->num_cin_correcteur = 0;
        
        $devoir->save();

             
        return redirect()->route('showListeDevoirs')
                        ->with('success','devoir créé avec succès');
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
        Devoir::where('id', $id)->delete();
        return redirect()->route('showListeDevoirs')
                        ->with('success','Devoir supprimé avec succès');
    }


    public function showQR(Request $request){
        
        // dd($request);
        $id=$request->id;
        //dd($id);

        $devoir= Devoir::where('id', $id)->first();
        $app_url=env('APP_URL');
        $QrCode=QrCode::size(450)->generate("$app_url/$devoir->id");
        return view('Backoffice.devoirs.qrcode', compact('QrCode'));
    } 
}
