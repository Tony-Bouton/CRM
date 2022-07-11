@extends('layouts.app') @section('title','Liste de contacts')


@section('content')

<form method="POST" action="{{route('contacts.update', [$contact->id])}}">
    @csrf
    @method("PUT")
  

    <label for="lastname">Nom</label>
    <input
        type="text"
        name="lastname"
        id="name"
        class="form-control"
        value="{{$contact->lastname}}"
    />


    <label for="firstname">Prenom</label>
    <input
        type="text"
        name="firstname"
        id="firstname"
        class="form-control"
        value="{{$contact->firstname}}"
    />

r

    <label for="tel">Numero de téléphone</label>
    <input
        type="text"
        name="tel"
        id="tel"
        class="form-control"
        value="{{$contact->tel}}"
    />

  
    <label for="email">Email</label>
    <input
        type="text"
        name="email"
        id="email"
        class="form-control"
        value="{{$contact->email}}"
    />

 

    <input type="submit" value="Modifier" />
</form>

     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



@endsection