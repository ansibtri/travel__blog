<?php 
    echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav justify-content-end me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="offcanvas"
            data-bs-target="#dashboardMenu" aria-controls="dashboardMenu">Menu</a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropdownMenuLink" href="#">Notifications
          <span class="position-absolute top-1 translate-middle badge rounded-pill bg-danger">99</span>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li><a class="dropdown-item" href="#">Anish Bhattarai commented on topic....</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </li>
        </ul>
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <a href="s-app/dashboard_log/dashboardlogout.php" class="mx-3 btn btn-outline-primary">Logout</a>
    </div>
  </div>
</nav>
';
?>