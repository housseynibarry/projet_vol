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

      <form method="post" action="{{ route('vols.update', $vol->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
              <label for="marque">code</label>
              <input type="nombre" class="form-control" name="code" value="{{ $vol->code }}"/>
              
          </div>
          <div class="form-group">
              <label for="marque">date_depart</label>
              <input type="date" class="form-control" name="date_depart" value="{{ $vol->date_depart }}"/>
              
          </div>

          <div class="form-group">
          <label for="date">heure_depart</label>
              <input type="time" class="form-control" name="heure_depart" value="{{ $vol->heure_depart }}"/>
          </div>
          <div class="form-group">
              <label for="">nombre_classe_A</label>
              <input type="nombre" class="form-control" name="nombre_classe_A" value="{{ $vol->nombre_classe_A }}"/>
          </div>
          <div class="form-group">
              <label for="">nombre_classe_B</label>
              <input type="nombre" class="form-control" name="nombre_classe_B" value="{{ $vol->nombre_classe_B }}"/>
          </div>

          <div class="form-group">
              <label for="prix">prix_classe_A</label>
              <input type="nombre" class="form-control" name="prix_classe_A" value="{{ $vol->prix_class_A}}"/>
          </div>
          <div class="form-group">
              <label for="prix">prix_classe_B</label>
              <input type="nombre" class="form-control" name="prix_classe_B" value="{{ $vol->prix_class_B }}"/>
          </div>
          <button type="submit" class="btn btn-primary">Modifier</button>
      </form>
  </div>
</div>
@endsection