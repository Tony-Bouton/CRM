@extends('layouts.app') @section('title','Liste de contacts')


@section('content')

<p>Nom : {{$contact->lastname}}</p>
<p>Prenom : {{$contact->firstname}}</p>
<p>Numero de telephone : {{$contact->firstname}}</p>
<p>E-mail : {{$contact->email}}</p>


@endsection