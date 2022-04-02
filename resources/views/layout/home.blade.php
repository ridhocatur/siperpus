<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Daterange -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="public/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="public/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="public/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/adminlte.min.css">
    <title>{{ $title }}</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            {{-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a> --}}

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white">Daftar Buku</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li><a href="#" class="nav-link px-2 text-white">About</a></li>
            </ul>

            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Login</button>
              <a href="daftar" class="btn btn-warning">Daftar</a>
            </div>
          </div>
        </div>
    </header>

    <main>
        @yield('main')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="public/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="public/js/jquery.dataTables.min.js"></script>
    <script src="public/js/dataTables.bootstrap4.min.js"></script>
    <script src="public/js/dataTables.responsive.min.js"></script>
    <script src="public/js/responsive.bootstrap4.min.js"></script>
    <script src="public/js/dataTables.buttons.min.js"></script>
    <script src="public/js/buttons.bootstrap4.min.js"></script>
    <script src="public/js/jszip.min.js"></script>
    <script src="public/js/pdfmake.min.js"></script>
    <script src="public/js/vfs_fonts.js"></script>
    <script src="public/js/buttons.html5.min.js"></script>
    <script src="public/js/buttons.print.min.js"></script>
    <script src="public/js/buttons.colVis.min.js"></script>
    {{-- <script> //untuk tables nanti
        $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script> --}}
</body>
</html>
