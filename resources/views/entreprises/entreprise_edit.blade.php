@extends('layouts.app') @section('title','Liste entreprises')


@section('content')


<form method="POST" action="{{ route('entreprises.update',[$entreprise->id]) }}">
   @csrf
      @method("PUT")
    <label for='name'>Nom de l'entreprise</label>
        <input type="text" name="name" id="name" value="{{$entreprise->name}}">
    
        <label for='statut'>Statut Entreprise</label>
        <input type="text" name="statut" id="statut" value="{{$entreprise->statut}}">
        
        <label for='siren'>Siren</label>
        <input type="siren" name="siren" id="siren"value="{{$entreprise->siren}}">
        
        <label for='email'>Email</label>
        <input type="text" name="email" id="email"value="{{$entreprise->name}}">
        
        <label for='tel'>Numero de telephone</label>
        <input type="text" name="tel" id="tel" value="{{$entreprise->tel}}">

        <input type="submit" value="Ajouter">

</form>


@endsection