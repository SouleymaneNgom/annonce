@extends('layouts.app')

@section('content')
<div class="container">
<h1>Déposer une annonce</h1>
<hr>
<form method="POST" action="{{route('ad.store')}}">
@csrf
  <div class="form-group">
    <label for="title">Titre de l'annonce</label>
    <input type="text" class="form-control" id="title" required aria-describedby="title" name="title">
  </div>
  <div class="form-group">
  <label for="description">Description de l'annonce</label>
  <textarea name="description" id="description" required class="form-control" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="localisation">Localisation</label>
    <input type="text" class="form-control" required id="localisation" name="localisation">
  </div>
  <div class="form-group">
    <label for="price">Prix</label>
    <input type="number" class="form-control" required id="price" name="price">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Soumettre notre annonce</button>
</form>
</div>
@endsection