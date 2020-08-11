@extends('layouts.app')

@section('title')
    Cliente - {{ $customer->name }}
@endsection

@section('content')

<nav class="white">
    <div class="nav-wrapper">
      <div class="col s12">
        <a href="{{ route('customer.index') }}" class="breadcrumb black-text">Clientes</a>
        <a href="#!" class="breadcrumb black-text">{{ $customer->name }}</a>
      </div>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m4 l4">
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://i.ibb.co/frRqVnp/profile-banner.png">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">{{ $customer->name }}<i class="material-icons right">edit</i></span>

              <ul>
                  <li>Correo electrónico: {{ $customer->email }}</li>
                  <li>Dirección: {{ $customer->address }}</li>
                  <li>Teléfono(s): {{ $customer->phone1 }}, {{ $customer->phone2 }}</li>
              </ul>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Editar<i class="material-icons right">close</i></span>

                <form class="delteform" action="{{ route('customer.destroy') }}" method="post">
                    @csrf
                    <input type="hidden" name="customerid" value="{{ $customer->id }}">
                </form>

              <form action="{{ route('customer.update') }}" method="POST">
                @csrf
                <input type="hidden" name="customerid" value="{{ $customer->id }}">
                <div class="input-field col s12 l6">
                    <input type="text" id="code" name="code" class="@error('code') invalid @enderror" value="{{ $customer->code }}">
                    <label for="code">Código *</label>
                    @error('code')
                        <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                    @enderror
                </div>
                <div class="input-field col s12 l6">
                    <input type="text" id="name" name="name" class="@error('name') invalid @enderror" value="{{ $customer->name }}">
                    <label for="name">Nombre</label>
                    @error('name')
                     <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                    @enderror
                  </div>
                  <div class="input-field col s12 l12">
                    <input type="text" id="address" name="address" class="@error('address') invalid @enderror" value="{{ $customer->address }}">
                    <label for="address">Dirección</label>            
                  </div>
                  <div class="input-field col s12">
                    <input type="email" id="email" name="email" class="@error('email') invalid @enderror" value="{{ $customer->email }}">
                    <label for="email" data-error="wrong" data-success="right">Correo electrónico</label>
                    @error('email')
                    <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                   @enderror
                  </div>
                  <div class="input-field col s12 l6">
                      <input type="text" id="phone1" name="phone1" class="@error('phone1') invalid @enderror" value="{{ $customer->phone1 }}">
                      <label for="phone1">Teléfono 1 *</label>
                      @error('phone1')
                      <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                     @enderror
                  </div>
                  <div class="input-field col s12 l6">
                    <input type="text" id="phone2" name="phone2" class="@error('phone2') invalid @enderror" value="{{ $customer->phone2 }}">
                    <label for="phone2">Teléfono 2</label>
                  </div>
                  <div class="input-field col s12 right-align">
                    <button class="btn waves-effect waves-light grey lighten-3 black-text btndelete" type="button" name="action">Eliminar
                        <i class="material-icons right">delete</i>
                      </button>
                    <button class="btn waves-effect waves-light orange" type="submit" name="action">Actualizar
                        <i class="material-icons right">update</i>
                      </button>
                   </div>
            </form>
            </div>
          </div>
    </div>
  </div>

@endsection

@section('js')

@endsection