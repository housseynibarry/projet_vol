@extends('layout')

@section('content')
<link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css')}}  ">

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier la reservation
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('Reservations.update', $reservations->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nom" value="{{ $reservations->nom }}"/>
          </div>

          <div class="form-group">
              <label for="prenom">Prenom</label>
              <input type="text" class="form-control" name="prenom" value="{{ $reservations->prenom }}"/>
          </div>
          <div class="form-group">
              <label for="sexe">Sexe</label>
              <input type="text" class="form-control" name="sexe" value="{{ $reservations->sexe }}"/>
          </div>
          <div class="form-group">
              <label for="classe">choix_de_class</label>
              <input type="text" class="form-control" name="choix_de_class" value="{{ $reservations->classe }}"/>
          </div>

          

          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection