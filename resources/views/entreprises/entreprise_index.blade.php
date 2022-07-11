@extends('layouts.app') @section('title','Liste entreprises')


@section('content')


@foreach($entreprise as $value)

<p> {{$value->name}}</p>
<p> {{$value->statut}}</p>
<p> {{$value->siren}}</p>
<p> {{$value->email}}</p>
<p> {{$value->tel}}</p>

 <form action="{{route('entreprises.destroy', [$value->id])}}" method="post">
                                @csrf
                                @method("DELETE")

                                <input class="action-link" type="submit" value="Supprimer" />
                            </form>

@endforeach

@endsection
