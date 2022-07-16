<nav class="navbar navbar-dark navbar-expand-lg bg-primary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">{{ env("APP_NAME") }}</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item text-white">
          <a class="nav-link text-white" href="#home">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#messages">Messages</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="#notifications">Notification</a>
        </li>

        <li class="nav-item">
          <form action="{{ route("logout") }}" method="post">
            @csrf
            <button type="submit" class="btn text-white">Logout</button>
          </form>
        </li>
        @endauth

        @guest
        <form class="d-flex" action="{{ route("login") }}" method="post">
          @csrf

          <div class="form-group me-2">
            <input class="form-control @error('message') border-danger @enderror" name="login_email" type="text" placeholder="Email" autocomplete="off" value="{{ old("email") }}">

            @error("message")
            <span class="text-danger">
              <small>{{ $message }}</small>
            </span>
            @enderror
          </div>

          <div class="form-group me-2">
            <input class="form-control" name="login_password" type="password" placeholder="Password" autocomplete="off">
          </div>

          <button class="btn btn-light" type="submit">Login</button>
        </form>
        @endguest
      </ul>
    </div>
  </div>
</nav>
