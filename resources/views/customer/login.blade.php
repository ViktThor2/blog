@extends('layout.app')

@section('content')

  @if(session()->has('message'))
    <h3>{{session('message')}}</h3>
  @endif

  @if($errors->first('email'))
    <h2 style="color:red">{{$errors->first('email')}}</h2>
  @endif

<div class="w-50 mt-5" style="margin:auto" >

  <!--Registracion Form -->
  <form class="mt-2 mb-2" method="post"
        action="{{ route('customer.login.store') }}" >
        @csrf

      <h4 class="modal-title mb-2">Bejelentkezés</h4>

      <!-- Email input  -->
      <div class="input-group mb-3">
        <span class="input-group-text">Email cím :</span>
          <input type="email" class="form-control"
            name="email" id="customerEmail" />
      </div>

      <!-- Password input  -->
      <div class="input-group mb-3">
        <span class="input-group-text">Jelszó :</span>
        <input type="password" class="form-control"
             name="password" id="customerPassword" />
      </div>

      <!-- Login button -->
      <button class="btn btn-primary btn-block" type="submit">
         Bejelentkezés
       </button>

  </form>

</div>


@stop
