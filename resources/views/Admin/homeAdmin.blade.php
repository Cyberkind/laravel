<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="ppm.css">
    <title>Pengaduan Masyarakat</title>
    <style>
        
    </style>
</head>

<body>
    {{-- awal navbar --}}
    
    <div class="shadow-lg p-2 mb-2 bg-body-tertiary rounded" style="padding:50%">
    <nav class="navbar navbar-expand-lg bs-primary border-subtle">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PPM</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="home">Home</a>
              
             
              <a class="nav-link" href="Masyarakat/laporan">Laporan</a>
              <a class="nav-link d-flex" href="logout">logout</a>
             {{-- akhir navbar --}}


            </div>
          </div>
          
            </div>
          </div>
        </div>
        
      </nav>
      
    </div>
  @yield('jjj')
</body>
</html>