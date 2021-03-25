@extends('layout.app')

@section('content')

<div class="w-50 mt-5" style="margin:auto" id="registerMain">

  <!--Registracion Form -->
  <form class="mt-2 mb-2" id="customerForm"
        method="post" action="{{ route('customer.store') }}" >
      @csrf

        <h4 class="modal-title mb-2">Regisztráció</h4>

      <!-- Name input -->
      <div class="input-group mb-3">
        <span class="input-group-text">Név :</span>
          <input type="text" class="form-control"
            name="name" id="custmerName" />
      </div>

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

      <!-- Password input again -->
      <div class="input-group mb-3">
        <span class="input-group-text">Jelszó ismét :</span>
        <input type="password" class="form-control"
          id="customerConfirmation" name="password_confirmation"/>
      </div>

      <!-- Registracion button -->
      <button class="btn btn-primary btn-block" type="submit">
         Regisztráció
       </button>

  </form>

</div>


@stop
