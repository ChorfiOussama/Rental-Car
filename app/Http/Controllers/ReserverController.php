<?php

namespace App\Http\Controllers;

use App\Models\reserver;
use App\Models\Voiture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReserverController extends Controller
{

    public function index()
    {

        return view('admin.Reserver.reserver',[
            'reservers'=> reserver::get()
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
    public function show(string $reserver)
    {
        $index = reserver::findOrFail($reserver);
        DB::table('reservers')->where('id', $index->id)->delete();
        return view('admin.Reserver.showReserver',[
            'reserver' => $index
        ]);
    }

   /////////////////////////////////////////////////////////////////////////////////
    public function edit(reserver $reserver)
    {
        //
    }

/////////////////////////////////////////////////////////////////////////////////
    public function update(Request $request, reserver $reserver)
    {
        //
    }

/////////////////////////////////////////////////////////////////////////////////
    public function destroy(string $id)
    {
        DB::table('reservers')->where('id', $id)->delete();
        return redirect('reserver'); 
    }
}
