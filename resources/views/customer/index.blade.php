@extends('layouts.app')

@section('title')
    Clientes
@endsection

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="row">
    <a class="waves-effect waves-light btn modal-trigger orange" href="#modal1">
       Crear <i class="material-icons right">add_circle</i>
    </a>
     <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Nuevo Cliente</h4>
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
            <input type="text" id="address" name="address" class="@error('address') invalid @enderror" value="{{ old('address') }}">
            <label for="address">Dirección</label>            
          </div>
          <div class="input-field col s12">
            <input type="email" id="email" name="email" class="@error('email') invalid @enderror" value="{{ old('email') }}">
            <label for="email" data-error="wrong" data-success="right">Correo electrónico</label>
            @error('email')
            <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
           @enderror
          </div>
          <div class="input-field col s12 l6">
              <input type="text" id="phone1" name="phone1" class="@error('phone1') invalid @enderror" value="{{ old('phone1') }}">
              <label for="phone1">Teléfono 1 *</label>
              @error('phone1')
              <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
             @enderror
          </div>
          <div class="input-field col s12 l6">
            <input type="text" id="phone2" name="phone2" class="@error('phone2') invalid @enderror" value="{{ old('phone2') }}">
            <label for="phone2">Teléfono 2</label>
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
        <th data-field="name">Nombre</th>
        <th data-field="address">Dirección</th>
        <th data-field="email">Correo electrónico</th>
        <th data-field="phone1">Telefono(s)</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($customers as $c)
      <tr class="rowtable">
        <td>{{ $c->name }}</td>
        <td>{{ $c->address }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->phone1 }}</td>
        <td>
          <a href="{{ route('customer.view',['id' => $c->id]) }}" class="btn-edit-table">
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