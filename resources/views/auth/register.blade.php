@extends('auth.layout')
  @section('content')
 <div class="min-vh-100 d-flex flex-row align-items-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card mb-4 mx-4">
          <div class="card-body p-4">
            <h1>Register</h1>
            <p class="text-medium-emphasis">Create your account</p>
            <div class="input-group mb-3"><span class="input-group-text">
              <svg class="icon">
                <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
              </svg></span>
              <input class="form-control" type="text" placeholder="Username">
            </div>
            <div class="input-group mb-3"><span class="input-group-text">
              <svg class="icon">
                <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open') }}"></use>
              </svg></span>
              <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="input-group mb-3"><span class="input-group-text">
              <svg class="icon">
                <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
              </svg></span>
              <input class="form-control" type="password" placeholder="Password">
            </div>
            <div class="input-group mb-4"><span class="input-group-text">
              <svg class="icon">
                <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked') }}"></use>
              </svg></span>
              <input class="form-control" type="password" placeholder="Repeat password">
            </div>
            <div class="row">
             <div class="col-8">
              <button class="btn btn-block btn-primary" type="button">Create Account</button>
            </div>
            <div class="col-4">
              <button class="btn btn-block btn-primary" type="button" onclick="window.location='{{ url("auth/login") }}'">Back</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection