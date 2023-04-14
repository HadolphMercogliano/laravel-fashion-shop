@extends('layouts.app')

@section('title', 'Aggiungi prodotto')

@section('content')

<div class="container">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{route('admin.shoes.store')}}">
          @csrf

            <label for="marca">marca</label>
            <input type="text" name="marca" id="marca" class="form-control mb-3">

            <label for="modello">modello</label>  
            <input type="text" name="modello" id="modello" class="form-control mb-3">

            <label for="colore">colore</label>  
            <input type="text" name="colore" id="colore" class="form-control mb-3">

            <label for="taglia">taglia</label>  
            <input type="number" name="taglia" id="taglia" class="form-control mb-3">

            <label for="prezzo">prezzo</label>  
            <input type="number" name="prezzo" id="prezzo" class="form-control mb-3">

            <label for="costo">costo</label>  
            <input type="number" name="costo" id="costo" class="form-control mb-3">

            <label for="image">image</label>  
            <input type="text" name="image" id="image" class="form-control mb-3">
            
            <label for="genere">genere</label>  
            <select name="genere" id="genere">

              <option value="uomo">uomo</option>
              <option value="donna">donna</option>
              <option value="bambino">bambino</option>
              <option value="bambina">bambina</option>

            </select>

            <input type="submit" class="btn btn-primary" value="Salva">
          </form>
        </div>
      </div>
    </div>
    
@endsection