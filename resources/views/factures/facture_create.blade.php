@extends('layouts.app') @section('title','Factures')


@section('content')

<form method="post" action="{{route('factures.store')}}">
   @csrf
  
    <label for='date'>Date</label>
        <input type="date" name="date" id="date" value="">
    
  
        
        <label for='montantHT'>Montant HT</label>
        <input type="siren" name="montantHT" id="montantHT"value="">
        
        <label for='tva'>tva</label>
        <input type="text" name="tva" id="tva"value="">
        
        
       
        <label for='titre'>Titre</label>
        <input type="text" name="titre" id="titre" value="">

        <input type="submit" value="Ajouter">

</form>

@endsection