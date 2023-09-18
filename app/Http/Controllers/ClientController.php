<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Clients;
use App\Models\Voiture;

use Illuminate\Http\Request;

class ClientController extends Controller
{
   
    public function index()
    {   
        return view('admin.Locataire.locataire',[
            'clients'=> Clients::get(),
            'voitures'=> Voiture::where('dispo', 'Oui')->get()
        ]);
    }
/////////////////////////////////////////////////////////////////////////////////

    public function create(Request $request)
    { }
/////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request )
    {
        $nom = $request->nom;
        $cin = $request->cin;
        $permis = $request->permis;
        $adresse = $request->adresse;
        $tele = $request->tele;
        $gsm = $request->gsm;
        $matricule = $request->matricule;
        $marque = $request->marque;
        $modele = $request->modele;
        $duree = $request->duree;
        $comm = $request->comm;
        $prix=$request->prix;
        $total=$prix*$duree;
        $voiture = Voiture::where('matricule', $matricule)->first();
      
    $toInsert = [
        'nom' => $nom,
        'cin' => $cin,
        'permis' => $permis,
        'adresse' => $adresse,
        'tele' => $tele,
        'gsm' => $gsm,
        'matricule' => $matricule,
        'marque' => $marque,
        'modele' => $modele,
        'duree' => $duree,
        'total' => $total,
        'comm' => $comm,
        'created_at' => now(),
    ];

    if ($voiture) {
        $voiture->dispo = 'Non';
        $voiture->save();
    } 
    DB::table('clients')->insert($toInsert);

    return redirect('locataire');
}
/////////////////////////////////////////////////////////////////////////////////

    public function show(string $voiture)
    {
        $index = Voiture::findOrFail($voiture);
         
        return view('admin.Locataire.showClient',[
            'voiture' => $index
        ]);
    }
/////////////////////////////////////////////////////////////////////////////////

    public function edit(string $id)
    { }
/////////////////////////////////////////////////////////////////////////////////

    public function update(Request $request, string $id)
    { }
/////////////////////////////////////////////////////////////////////////////////
  
    public function destroy(string $id)
    {
        // $client= DB::table('clients')->where('matricule', $matricule)->first();
        // if ($client) {
             DB::table('clients')->where('id', $id)->delete();
            //  DB::table('voitures')->update(['dispo' => 'Oui']);
        //     } 

        // $client= Voiture::where('id', $id)->update(['dispo' => 'Oui']);
            // $client= Clients::where('matricule', $matricule)->get();
            
        // DB::table('clients')->where('id', $id)->delete();

        return redirect('locataire');
        // return response($client);
    }
}
