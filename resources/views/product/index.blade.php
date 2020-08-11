@extends('layouts.app')

@section('title')
    Productos
@endsection

@section('content')

<div class="row">
    <a class="waves-effect waves-light btn modal-trigger orange" href="#modal1">
       Crear <i class="material-icons right">add_circle</i>
    </a>
     <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Nuevo Producto</h4>
      <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <div class="input-field col s12 l6">
            <input type="text" id="code" name="code" class="@error('code') invalid @enderror" value="{{ old('code') }}">
            <label for="code">Código *</label>
            @error('code')
                <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
            @enderror
        </div>
        <div class="input-field col s12 l6">
            <input type="text" id="name" name="name" class="@error('name') invalid @enderror" value="{{ old('name') }}">
            <label for="name">Nombre</label>
            @error('name')
             <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
            @enderror
          </div>
          <div class="input-field col s12 l12">
            <input type="number" id="price" name="price" class="@error('price') invalid @enderror" value="{{ old('price') }}">
            <label for="price">Precio</label>            
          </div>
          <div class="input-field col s12">
            <label>Clasificación</label>
            <select id="cls" name="email" class="browser-default @error('cls') invalid @enderror">
              <option value="" disabled selected>Elije una clasificación</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            @error('cls')
            <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
           @enderror
          </div>
          <div class="input-field col s12 right-align">
            <button class="btn waves-effect waves-light " type="submit" name="action">Guardar
                <i class="material-icons right">check</i>
              </button>
           </div>
    </form>
    </div>
  </div>
</div>

<div class="row">
  <table class="table display responsive nowrap bordered">
    <thead>
      <tr>
        <th data-field="name">Código</th>
        <th data-field="address">Nombre</th>
        <th data-field="email">Precio</th>
        <th data-field="phone1">Clasificación</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $p)
      <tr class="rowtable">
        <td>{{ $p->code }}</td>
        <td>{{ $p->name }}</td>
        <td>{{ $p->price }}</td>
        <td>{{ $p->classification->name }}</td>
        <td>
          <a href="{{ route('customer.view',['id' => $p->id]) }}" class="btn-edit-table">
            <i class="material-icons btn-edit">more_vert</i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection

@section('js')

<script>
    
</script>

@endsection