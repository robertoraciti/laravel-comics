  <nav class="navbar navbar-expand-lg container" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="/img/dc-logo.png" alt="" srcset="" width="70">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">         
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">CHARACTERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('home') }}">COMICS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">MOVIES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">TV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">GAMES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">COLLECTIBLES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">VIDEOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">FANS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('news') }}">NEWS</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SHOP
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">SHOW CART</a></li>
            </ul>
          </li>
          <nav class="navbar">
            <div class="container-fluid">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </nav>
        </ul>
      </div>
    </div>
  </nav>

  <style lang="scss" scoped>
    #navbar {
      height: 120px;
    }
  </style>