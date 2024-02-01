<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pengiriman barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="wrapper">
    <aside id="sidebar" class="js-sidebar">
      <!-- Sidebar -->
      <div class="h-100">
        <div class="sidebar-logo">
          <a href="#">Pengiriman Barang</a>
        </div>
        <ul class="sidebar-nav">
          <li class="sidebar-header">Menu Admins</li>
          <li class="sidebar-item">
            <a href="index.php" class="sidebar-link">
              <i class="fa-solid fa-list pe-2"></i>
              Faktur
            </a>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
              Master
            </a>
            <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="barang.php" class="sidebar-link">Barang</a>
              </li>
              <li class="sidebar-item">
                <a href="pembeli.php" class="sidebar-link">Pembeli</a>
              </li>
              <li class="sidebar-item">
                <a href="penjual.php" class="sidebar-link">Penjual</a>
              </li>
            </ul>
          </li>
          <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed" data-bs-target="#multi" data-bs-toggle="collapse" aria-expanded="false"><i class="fa-solid fa-share-nodes pe-2"></i>
              Multi Dropdown
            </a>
            <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link collapsed" data-bs-target="#level-1" data-bs-toggle="collapse" aria-expanded="false">Level 1</a>
                <ul id="level-1" class="sidebar-dropdown list-unstyled collapse">
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Level 1.1</a>
                  </li>
                  <li class="sidebar-item">
                    <a href="#" class="sidebar-link">Level 1.2</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
    </aside>
    <!-- Main Content -->
    <div class="main">
      <!-- Navbar -->
      <nav class="navbar navbar-expand px-3 border-bottom">
        <button class="btn" id="sidebar-toggle" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                <img src="image/profile.jpg" class="avatar img-fluid rounded" alt="" />
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">Profile</a>
                <a href="#" class="dropdown-item">Setting</a>
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Konten Dashboard -->
      <main class="content px-3 py-2">
        <div class="container-fluid">
          <div class="mb-3">
            <h4>Faktur Pengiriman Barang</h4>
          </div>

          <!-- Table Element -->
          <div class="card border-0">
            <div class="card-header">
              <h5 class="card-title">Pengiriman Barang</h5>
              <h6 class="card-subtitle text-muted">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Voluptatum ducimus, necessitatibus reprehenderit itaque!
              </h6>
            </div>
            <div class="card-body">
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Alamat Pembeli</th>
                    <th scope="col">Nama Penjual</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">QTY</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>BRG001</td>
                    <td>John Doe</td>
                    <td>Jl. ABC No. 123</td>
                    <td>Store XYZ</td>
                    <td>2024-01-31</td>
                    <td>3</td>
                    <td>$150.00</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>BRG002</td>
                    <td>Jane Smith</td>
                    <td>Jl. DEF No. 456</td>
                    <td>Shop ABC</td>
                    <td>2024-01-31</td>
                    <td>2</td>
                    <td>$100.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
      <a href="#" class="theme-toggle">
        <i class="fa-regular fa-moon"></i>
        <i class="fa-regular fa-sun"></i>
      </a>

      <!-- Footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a href="#" class="text-muted">
                  <strong>Pemrograman Basis Data</strong>
                </a>
              </p>
            </div>
            <div class="col-6 text-end">
              <ul class="list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-muted">Contact</a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">About Us</a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">Terms</a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-muted">Booking</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>