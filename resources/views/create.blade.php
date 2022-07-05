
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
    Ajouter un Vol
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

     
    <form method="post" action="{{ route('vols.store') }}">
.         @csrf
          <div class="form-group">
              <label for="marque">code</label>
              <input type="text" class="form-control" name="code"/>
          </div>
          <div class="form-group">
              <label for="marque">date_depart</label>
              <input type="date" class="form-control" name="date_depart"/>
          </div>
          <div class="form-group">
              <label for="">heure-depart</label>
              <input type="time" class="form-control" name="heure-depart"/>
          </div>
          <div class="form-group">
              <label for="">nombre_classe_A</label>
              <input type="text" class="form-control" name="nombre_classe_A"/>
          </div>
          <div class="form-group">
              <label for="">nombre_classe_B</label>
              <input type="text" class="form-control" name="nombre_classe_B"/>
          </div>

          <div class="form-group">
              <label for="prix">prix_classe_A</label>
              <input type="text" class="form-control" name="prix_classe_A"/>
          </div>
          <div class="form-group">
              <label for="prix">prix_classe_B</label>
              <input type="text" class="form-control" name="prix_classe_B"/>
          </div>
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection 

