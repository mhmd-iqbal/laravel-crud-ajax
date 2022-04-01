@extends('layouts.main')
@section('content')
  <section class="min-vh-100 gradient-custom">
    <div class="container py-5 h-100">
      @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">
                <form action="/register" method="POST">
                  @csrf
                  <h2 class="fw-bold mb-4 text-uppercase">Registration</h2>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="typeEmailX" name="email"
                      class="form-control form-control-lg @error('email') is-invalid @enderror"
                      value="{{ old('email') }}" />
                    <label class="form-label" for="typeEmailX">Email</label>
                    @error('email')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="name" name="name"
                      class="form-control form-control-lg @error('name') is-invalid @enderror"
                      value="{{ old('name') }}" />
                    <label class="form-label" for="name">Full Name</label>
                    @error('name')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="text" id="username" name="username"
                      class="form-control form-control-lg @error('username') is-invalid @enderror"
                      value="{{ old('username') }}" />
                    <label class="form-label" for="username">Username</label>
                    @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" id="typePasswordX" name="password"
                      class="form-control form-control-lg @error('password') is-invalid @enderror" />
                    <label class="form-label" for="typePasswordX">Password</label>
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                </form>
              </div>

              <div>
                <p class="mb-0">Already have account? <a href="/login" class="text-white-50 fw-bold">Sign
                    In</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
