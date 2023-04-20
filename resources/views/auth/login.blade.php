@extends('auth.layout')
  @section('content')
  <div class="min-vh-100 d-flex flex-row align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="card-group d-block d-md-flex row">
            <div class="card col-md-7 p-4 mb-0">
              <div class="card-body">
                <h1>Login</h1>
                <p class="text-medium-emphasis">Sign In to your account</p>
                <div class="input-group mb-3"><span class="input-group-text">
                  <svg class="icon">
                    <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
                  </svg></span>
                  <input class="form-control" type="text" placeholder="Username">
                </div>
                <div class="input-group mb-4"><span class="input-group-text">
                  <svg class="icon">
                    <use href="{{ asset('import/node_modules/@coreui/icons/sprites/free.svg#cil-user') }}"></use>
                  </svg></span>
                  <input class="form-control" type="password" placeholder="Password">
                </div>
                <div class="row">
                  <div class="col-12">
                    <button class="btn btn-primary btn-block btn-lg" type="button">Login</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="card col-md-5 text-white bg-info py-5">
              <div class="card-body text-center">
                <div>
                  <h2>Sign up</h2>
                  <p>Dr. Jose Fabella Memorial Hospital</p>
                  <br>
                  <br>
                  <button class="btn btn-lg btn-outline-light mt-3" type="button" onclick="window.location='{{ url("auth/register")}}'">Register Now!</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection