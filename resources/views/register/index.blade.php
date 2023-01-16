@extends('templates.main')

@section('container')
<div class="row justify-content-center m-4">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action = "/register", method = "post">
            @csrf
              <div class="form-floating">
                <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" name = "name" value = "{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                {{ $message }}
                @enderror
            </div>
              <div class="form-floating">
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name = "username" value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                {{ $message }}
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name = "email" value = "{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                {{ $message }}
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name = "password">
                <label for="floatingPassword">Password</label>
                @error('password')
                {{ $message }}
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
              <small class="d-block text-center mt-3">Already registered? <a href="/login">Login Here!</a></small>
            </form>
          </main>
    </div>
</div>


@endsection