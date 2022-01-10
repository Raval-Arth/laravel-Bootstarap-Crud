@extends('layout.index')

@section('content')
<main>
  <div class="row">
    <div class="py-4 col-6 mx-auto order-md-last">
      <div class="card">
        <div class="card-body">

          @if (Session::has('error_message'))
          <div class="alert alert-danger" role="alert">
            {{ Session::get('error_message') }}
          </div>
          @endif

          @if (Session::has('message'))
          <div class="alert alert-success" role="alert">
            {{ Session::get('message') }}
          </div>
          @endif

          <h2>Login</h2>
        </div>
      </div>

      <x-login-form />
    </div>
  </div>
</main>
@stop
