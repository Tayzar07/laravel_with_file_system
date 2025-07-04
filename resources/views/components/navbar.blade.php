<nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex align-items-center">
         @auth
             <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
             <form action="/logout" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-link nav-link" type="submit">Logout</button>
             </form>
            @else
            <a href="/login" class="nav-link">Login</a>
            <a href="/register" class="nav-link">Register</a>
         @endauth
          <a href="/" class="nav-link">Home</a>
          <a href="/#blogs" class="nav-link">Blogs</a>
          <a href="#subscribe" class="nav-link">Subscribe</a>
        </div>
      </div>
    </nav>
