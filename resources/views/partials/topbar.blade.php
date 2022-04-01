<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Offcanvas navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
      aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('products*') ? 'active fw-bold' : '' }}" href="/products">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('categories*') ? 'active fw-bold' : '' }}"
              href="/categories">Categories</a>
          </li>
          @auth
            <form action="/logout" method="POST">
              @csrf
              <li class="nav-item">
                <button type="submit" class="nav-link">Logout</button>
              </li>
            </form>

            <li class="nav-item">
              <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
            </li>
          @else
            <li class="nav-item">
              <a class="nav-link {{ Request::is('login') ? 'active fw-bold' : '' }}" href="/login">Login</a>
            </li>
          @endauth

        </ul>
      </div>
    </div>
  </div>
</nav>
