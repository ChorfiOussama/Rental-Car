@extends('voitures.layout')
@section('content')
<style>
  
   .beau {
  color: #1a1aff;
  font-size: 20px;
  text-align: center;
  background-color:  #ccccff;
  padding: 10px;
  border-radius: 10px;
  transition: 0.5s;
  font-weight: 600;
}
h2 {
    font-size: 50px;
    font-family: serif;
    color: #2b2e4a;
    font-weight: 500;
    /* text-transform: uppercase; */
    text-align: center;
    margin-top: 30px;
    margin-bottom:10px ;
  }

</style>
<div class="container">
  
    <h2 >Conditions De Location</h2>
    <ul>
      <li>AGE MINIMUM 21 ANS.</li>
      <li>PERMIS DE CONDUIRE VALABLE DEPUIS 2 ANS.</li>
      <li>LE PAIEMENT S’EFFECTUE BIEN AU MOMENT DE LA PRISE EN CHARGE DU VÉHICULE SOIT EN ESPÈCES OU EN DEVISES.</li>
      <li>LE LOCATAIRE EST RESPONSABLE SUR ROUTE COMME AU STATIONNEMENT.</li>
      <li>LE LOCATAIRE DOIT RENDRE LE VÉHICULE DANS LE MÊME ÉTAT À SA LIVRAISON.</li>
      <li>LE CARBURANT EST À LA CHARGE DU CLIENT.</li>
      <li>L’UTILISATION DES VÉHICULES SUR PISTES NON GOUDRONNÉES EST ABSOLUMENT INTERDITE.</li>
      <li>NOS TARIFS SONT APPLICABLES SUR RÉSERVATION : 48 HEURES À L’AVANCE ET 7 JOURS EN PÉRIODE DE HAUTE SAISON.</li>
      <li>LA DURÉE DE VOTRE LOCATION COMMENCE ET FINIT À L'HEURE DE DÉMARRAGE CONVENUE ET L'HEURE DE FIN CONVENUE QUI FIGURENT SUR VOTRE CONTRAT DE LOCATION.</li>
    </ul>
    <p class="beau">NOS TARIFS COMPRENNENT</p>
    <ul>
      <li>L’HUILE, L’ENTRETIEN DU VÉHICULE.</li>
      <li>LE CARBURANT DU VÉHICULE N’EST PAS COMPRIS DANS NOS TARIFS.</li>
    </ul>
    <p class="beau">ASSURANCES :</p>
    <ul>
      <li>L’ASSURANCE COUVRE LES DOMMAGES ILLIMITÉS CONTRE LES TIERS SUIVANT LA RÉGLEMENTATION EN VIGUEUR AU MAROC.</li>
      <li>LA RESPONSABILITÉ CIVILE DU LOCATAIRE ET DU CONDUCTEUR.</li>
      <li>INCENDIE ET VOL.</li>
      <li>LES DÉGÂTS DU VÉHICULE NE SONT COUVERTS QUE SUR PRODUCTION D’UN CONSTAT D’ACCIDENT DANS LES 24 HEURES.</li>
</ul>
</div>
          
@endsection