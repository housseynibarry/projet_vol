
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

     
    <form method="post" action="{{ route('Reservations.store') }}">
.         @csrf
          <div class="form-group">
              <label for="marque">nom</label>
              <input type="text" class="form-control" name="nom"/>
          </div>
          <div class="form-group">
              <label for="">prenom</label>
              <input type="text" class="form-control" name="prenom"/>
          </div>
          <div class="form-group">
              <label for="">sexe</label>
              <input type="text" class="form-control" name="sexe"/>
          </div>
          <div class="form-group">
              <label for="">chois_de_class</label>
              <input type="text" class="form-control" name="choix_de_class"/>
          </div>
          <div class="form-group">
              <select name="vols_id" >
                @foreach($vols as $vol)
                <option value="{{$vol->id}}">{{$vol->code}}</option>
                @endforeach
               
              </select>
          </div>


          
          <button type="submit" class="btn btn-primary">Ajouter</button>
      </form>
  </div>
</div>
@endsection 

