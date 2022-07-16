@extends("layouts.master")

@section("content")
<div class="mt-5">
  <div class="d-flex align-items-center justify-content-center h-screen">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-6 d-flex justify-content-center">
          <form action="{{ route("register") }}" method="post" class="card w-90">
            <div class="card-header text-center bg-primary text-white">Sign up to SocialShare</div>

            @csrf

            <div class="card-body">
              <div class="row">
                <div class="col-12 col-lg-4">
                  <x-form-group label="First Name" type="text" id="firstname" placeholder="Juan" required />
                </div>

                <div class="col-12 col-lg-4">
                  <x-form-group label="Middle Name" type="text" id="middlename" placeholder="Santos" />
                </div>

                <div class="col-12 col-lg-4">
                  <x-form-group label="Last Name" type="text" id="lastname" placeholder="Dela Cruz" required />
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <x-form-group label="Birth Date" type="date" id="birthdate" required />
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6">
                  <x-form-group label="Username" type="text" id="username" placeholder="SomethingCatchy69" required />
                </div>

                <div class="col-12 col-lg-6">
                  <x-form-group label="Email Address" type="email" id="email" placeholder="name@example.com" required />
                </div>
              </div>

              <div class="row">
                <div class="col-12 col-lg-6">
                  <x-form-group label="Password" type="password" id="password" placeholder="************" required />
                </div>

                <div class="col-12 col-lg-6">
                  <x-form-group label="Repeat Password" type="password" id="password_confirmation" placeholder="************" required />
                </div>
              </div>
            </div>

            <div class="card-footer">
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign Up</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-12 col-lg-6">
          <h1>Something Changed Here</h1>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
