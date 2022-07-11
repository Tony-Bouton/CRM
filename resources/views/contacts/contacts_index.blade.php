@extends('layouts.app') @section('title','Liste de contacts')


@section('content')

@foreach($contact as $value)
<div class="contact">
<p> {{$value->lastname}}</p>
<p> {{$value->firstname}}</p>
<p> {{$value->tel}}</p>
<p> {{$value->email}}</p>

</div>

 <form action="{{route('contacts.destroy', [$value->id])}}" method="post">
                                @csrf
                                @method("DELETE")

                                <input class="action-link" type="submit" value="Supprimer" />
                            </form>
@endforeach
<style>

    .contact{
        border:black solid 2px;
        margin: 10px;
        border-radius:10px;
        padding: 10px;
    }
</style>






@endsection