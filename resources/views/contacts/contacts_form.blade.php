@extends('layouts.app') @section('title','Ajoute un contact')


@section('content')



<form method="POST" action="{{ route('contacts.store') }}">
    @csrf

    <label for="lastname">Nom</label>
    <input
        type="text"
        name="lastname"
        id="name"
        class="form-control"
        value="{{ old('lastname') }}"
    />


    <label for="firstname">Prenom</label>
    <input
        type="text"
        name="firstname"
        id="firstname"
        class="form-control"
        value="{{ old('firstname') }}"
    />

r

    <label for="tel">Numero de téléphone</label>
    <input
        type="text"
        name="tel"
        id="tel"
        class="form-control"
        value="{{ old('tel') }}"
    />

  
    <label for="email">Email</label>
    <input
        type="text"
        name="email"
        id="email"
        class="form-control"
        value="{{ old('email') }}"
    />

 

    <input type="submit" value="Ajouter" />
</form>

@endsection
