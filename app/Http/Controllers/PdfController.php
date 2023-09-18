<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf();
        // $this->ff= Clients::find(9);
    }
    public function generatePdf($id)
    {   
        $ff= Clients::find($id);
       
        
        
        $this->fpdf->SetY(-15);
        // $this->fpdf->AddFont('Myfonts','','Myfonts.ttf',true);
        $this->fpdf->SetFont('Arial','B',15);

        $this->fpdf->Cell(60);
     $this->fpdf->Image('images/logo.png',12,10,40);

        $this->fpdf->Cell(80,10,'CONTRAT DE LOCATION',1,0,'C');
        $this->fpdf->Cell(0,10,'N : '.$ff->id,0,1,'C');
        $this->fpdf->Ln(20);

        $this->fpdf->SetFont('Arial','B',15);
        $this->fpdf->Cell(0,10,'Locataire :',0,1,'L');
        $this->fpdf->SetFont('Arial','',12);
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Nom et Prenom : '.$ff->nom,0,1,'L');
        // $this->fpdf->SetX(20);
        // $this->fpdf->SetFont('Myfonts','','Myfonts.php');
        // $this->fpdf->SetFont('Myfonts','',12);
        // $this->fpdf->Cell(0,10,'أسامة : ','L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'CIN ou Passeport : '.$ff->cin,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Permis de Conduite : '.$ff->permis,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Adresse : '.$ff->adresse,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Telephone : 0'.$ff->tele,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Telephone 2 : 0'.$ff->gsm,0,1,'L');
        $this->fpdf->Ln(15);

        $this->fpdf->SetFont('Arial','B',15);
        $this->fpdf->Cell(0,10,'Information Sur La Voiture :',0,1,'L');
        $this->fpdf->SetFont('Arial','',12);
        $this->fpdf->SetX(20);
       
        $this->fpdf->Cell(0,10,'Matricule : '.$ff->matricule,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Marque de Voiture : '.$ff->marque,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Modele de Voiture : '.$ff->modele,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Date de Depart : '.$ff->created_at,0,1,'L');
        // $this->fpdf->Cell(0,10,'Date de Depart : '.date(D/m/Y),0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Nombre de Jour : '.$ff->duree,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Prix Total : '.$ff->total,0,1,'L');
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Commentaires : '.$ff->comm,0,1,'L');
        $this->fpdf->SetY(250);
        $this->fpdf->SetX(20);
        $this->fpdf->Cell(0,10,'Cachet et Signature de Modou Car:                                        
        Signature de Client: ',0,1,'L');
        
    


        $this->fpdf->Output();

        exit;

 
    }


}
