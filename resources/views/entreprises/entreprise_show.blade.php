@extends('layouts.app') @section('title','Liste entreprises')


@section('content')


<p>{{$entreprise->name}}</p>
<p>{{$entreprise->statut}}</p>
<p>{{$entreprise->siren}}</p>
<p>{{$entreprise->email}}</p>
<p>{{$entreprise->tel}}</p>


@endsection