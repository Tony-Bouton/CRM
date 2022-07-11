@extends('layouts.app') @section('title','Liste entreprises')


@section('content')


<form method="post" action="{{ route('entreprises.store') }}">
   @csrf
    <label for='name'>Nom de l'entreprise</label>
        <input type="text" name="name" id="name">
    
        <label for='statut'>Statut Entreprise</label>
        <input type="text" name="statut" id="statut">
        
        <label for='siren'>Siren</label>
        <input type="siren" name="siren" id="siren">
        
        <label for='email'>Email</label>
        <input type="text" name="email" id="email">
        
        <label for='name'>Numero de telephone</label>
        <input type="text" name="tel" id="tel">

        <input type="submit" value="Ajouter">

</form>


@endsection
