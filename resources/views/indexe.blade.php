

@extends('layout')

@section('content')
<link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css')}}  ">

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
<h1>la liste de reservation</h1>
  

  <table class="table table-dark table-hover">
  <thead>
        <tr>
          <td>ID</td>
          <td>Nom</td>
          <td>Prenom</td>
          <td>Sexe</td>
          <td>choix_de_class</td>
          <td colspan="2">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($reservations as $reservation)
        <tr>
            <td>{{$reservation->id}}</td>
            <td>{{$reservation->nom}}</td>
            <td>{{$reservation->prenom}}</td>
            <td>{{$reservation->sexe}}</td>
            <td>{{$reservation->choix_de_class}}</td>
            <td><a href="{{ route('Reservations.edit', $reservation->id)}}"  class="btn btn-primary">Modifier</a></td>
            <td>
                <form action="{{ route('Reservations.destroy', $reservation->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
@endsection