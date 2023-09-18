<?php

namespace App\Http\Controllers;
use App\Models\Voiture;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EnregistrementController extends Controller
{
    public function index()
    {
        return view('admin.Voiture.enregistrement',[
            'voitures'=> Voiture::get()
            // 'voitures'=> Voiture::paginate(3)
        ] );
    }
/////////////////////////////////////////////////////////////////////////////////

    public function create(Request $request)
    {
        return view('admin.Voiture.showVoiture');
    }
////////////////////////////////////////////////////////////////////////////////

    public function store(Request $request)
    {
       $image = $request->image; 
       $matricule = $request->matricule;
       $marque = $request->marque;
       $modele = $request->modele;
       $prix = $request->prix;
       $carburant = $request->carburant;
       $transmission = $request->transmission;
       $stereo = $request->stereo;
       $climatisation = $request->climatisation;
       $maxpassagers = $request->maxpassagers;
       $bagages = $request->bagages;
       $dispo = $request->dispo;
       $desPortes = $request->desPortes;
     
       $toInsert = [
           'image' => $image,
           'matricule' => $matricule,
           'marque' => $marque,
           'modele' => $modele,
           'prix' => $prix,
           'carburant' => $carburant,
           'transmission' => $transmission,
           'stereo' => $stereo,
           'climatisation' => $climatisation,
           'maxpassagers' => $maxpassagers,
           'bagages' => $bagages,
           'dispo' => $dispo,
           'desPortes' => $desPortes, 
           'created_at' => now(),
       ];

       DB::table('voitures')->insert($toInsert);

       return redirect('voitures');
    }
///////////////////////////////////////////////////////////////////////////

    public function show(string $voiture)
    { 
    }
//////////////////////////////////////////////////////////////////////////

    public function edit(string $id)
    {
         $voiture = DB::table('voitures')->where('id', $id)->first();

         if (!$voiture) {
             return redirect('voitures');
         }

         return view('admin.Voiture.editvoiture', ['voiture' => $voiture]);
    }
///////////////////////////////////////////////////////////////////////////

    public function update(Request $request, string $id)
    {
        $image = $request->image;
        $matricule = $request->matricule;
        $marque = $request->marque;
        $modele = $request->modele;
        $prix = $request->prix;
        $carburant = $request->carburant;
        $transmission = $request->transmission;
        $stereo = $request->stereo;
        $climatisation = $request->climatisation;
        $maxpassagers = $request->maxpassagers;
        $bagages = $request->bagages;
        $dispo = $request->dispo;
        $desPortes = $request->desPortes;

        $toUpdate = [
            'image' => $image,
            'matricule' => $matricule,
            'marque' => $marque,
            'modele' => $modele,
            'prix' => $prix,
            'carburant' => $carburant,
            'transmission' => $transmission,
            'stereo' => $stereo,
            'climatisation' => $climatisation,
            'maxpassagers' => $maxpassagers,
            'bagages' => $bagages,
            'dispo' => $dispo,
            'desPortes' => $desPortes,
            'updated_at' => now(),
        ];

        DB::table('voitures')->where('id', $id)->update($toUpdate);

        return redirect('voitures');
    }
/////////////////////////////////////////////////////////////////////////

    public function destroy(string $id)
    {
        DB::table('voitures')->where('id', $id)->delete();
        return redirect('voitures');
    }
}
