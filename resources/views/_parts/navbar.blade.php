  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Adam Vets</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="/owners">Owners Hub</a>
        </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0" action="owners/search" method="GET">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search owners.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>