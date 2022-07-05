
@extends('layout')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<link rel="stylesheet" href=" {{ asset('css/bootstrap.min.css')}}  ">

<div class="uper">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table table-dark table-sm">
  <thead>
        <tr>
          <td>ID</td>
          <td>code</td>
          <td>date_depart</td>
          <td>heure-depart</td>
          <td>nombre_classe_A</td>
          <td>nombre_classe_B</td>
          <td>prix_classe_A</td>
          <td>prix_classe_B</td>
          <td colspan="3">Action</td>
          </td>
                <td><td><a href="{{ ('/Reservations/create')}}" class="btn btn-primary">Reservation</a></td></td>
        </tr>
    </thead>
    
    <tbody>
        @foreach($vols as $vol)
            <tr>
                <td> {{($vol->id)}}</td>
                <td> {{($vol->code)}}</td>
                <td> {{$vol->date_dapart}}</td>
                <td> {{$vol->heure_depart}} </td>
                <td> {{$vol->nombre_classe_A}} </td>
                <td> {{$vol->nombre_classe_B}} </td>
                 <td> {{$vol->prix_classe_A}} </td>
                <td> {{$vol->prix_classe_B}} </td>
                <td><a href="{{ route('vols.edit', $vol->id)}}" class="btn btn-primary">Modifier</a></td>
                <td>
                    <form action="{{ route('vols.destroy', $vol->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                
        </tr>
        @endforeach
    </tbody>
  </table>
</table>



    

<div>
@endsection
