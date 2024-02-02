@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-md-4">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <form>
        {{-- <img class="mb-4" src="https://www.logologo.com/logos/sword-wings-tattoo-free-logobig.jpg" alt="" width="350" height="230"> --}}
      
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>
          <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>

        <small class="d-block text-center mt-3">
          Not Registered? <a href="/register">Register Now!</a>
        </small>
    </main>
  </div>
</div>


@endsection