<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Voiture;

class VoituresController extends Controller
{

    public function index()
    {
        return view('voitures.index',[
            'voitures'=> Voiture::where('dispo', 'Oui')->get()
        ] );
    }

 /////////////////////////////////////////////////////////////////////////////////
    public function create()
    {
        //
    }

/////////////////////////////////////////////////////////////////////////////////
    public function store(Request $request)
    {    
        $matricule = $request->matricule;
        $marque = $request->marque;
        $modele = $request->modele;
        $prix = $request->prix;
        $nom = $request->nom;
        $cin = $request->cin;
        $permis = $request->permis;
        $adresse = $request->adresse;
        $tele = $request->tele;
        $gsm = $request->gsm;
        $dateDebut = $request->dateDebut;
        $duree = $request->duree;
        $message= $request->message; 

        $toInsert = [
            'matricule' => $matricule,
            'marque' => $marque,
            'modele' => $modele,
            'prix' => $prix,
            'nom' => $nom,
            'cin' => $cin,
            'permis' => $permis,
            'adresse' => $adresse,
            'tele' => $tele,
            'gsm' => $gsm,
            'dateDebut' => $dateDebut,
            'duree' => $duree,
            'message' => $message,
            'created_at' => now(),
        ];

        DB::table('reservers')->insert($toInsert);

        return redirect('voiture');
    }

/////////////////////////////////////////////////////////////////////////////////
    public function show(string $voiture)
    {
        $index = Voiture::findOrFail($voiture);
        
        return view('voitures.show',[
            'voiture' => $index
        ]);
    }

/////////////////////////////////////////////////////////////////////////////////
    public function edit(string $id)
    {
        //
    }

/////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request, string $id)
    {
        //
    }

/////////////////////////////////////////////////////////////////////////////////
    public function destroy(string $id)
    {
        //
    }

}
