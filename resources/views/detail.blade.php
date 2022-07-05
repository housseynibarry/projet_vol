@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
  label{
     color:blue;
  }
  /* table{
     margin-top: 100px
  } */
   h1{
     color:blue;
     margin-top: 100px
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le vol
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
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="../img/logo.png" alt="" width=200px; ></a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('vols') }}">VOLS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">RESERVATIONS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">CONTACT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">COMPAGNIES</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">SKY MALI</a></li>
            <li><a class="dropdown-item" href="#">AIR BURKUNA</a></li>
            <li><a class="dropdown-item" href="#">AIR FRANCE</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
  <table>
    <h1>les informations sur le Vol</h1>
    
  </table>
      <form  style="width:50%;margin:auto;" method="post" action="{{ route('vols.update', $vol->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="code">Vol:</label>
              {{ $vols->code }}
          </div>

          <div class="form-group">
              <label for="date">Date de depart :</label>
             {{ $vols->date_depart }}
          </div>
          <div class="form-group">
              <label for="heure">Heure de depart :</label>
             {{ $vol->heure_depart }}
          </div>
          <div class="form-group">
              <label for="plcA">Nombre de place de la Classe A :</label>
            {{ $vol->nbre_plc_classA }}
          </div>
          <div class="form-group">
              <label for="plcB">Nombre de place de la Classe B :</label>
             {{ $vol->nbre_plc_classB }}
          </div>
          <div class="form-group">
              <label for="prixA">Prix de la Classe A :</label>
              {{ $vol->prixA }}
          </div>
          <div class="form-group">
              <label for="prixB">Prix de la Classe B :</label>
              {{ $vol->prixB }}
          </div>
          
      </form>
  </div>
</div>
@endsection