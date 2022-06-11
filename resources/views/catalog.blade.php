<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyStore | Catalog</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">My Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/catalog">Catalog</a>
                </li>
              </ul>
            </div>
        </div>
    </nav>
    {{-- end Navbar --}}

    {{-- Content --}}
    <div class="container mt-5">
        <div class="jumbotron jumbotron-fluid">
            <div class="container pl-5 pr-5">
              <h1 class="display-4">Medicines</h1>
              <a href="/catalog/medicines" class="mt-2">Go to Medicines</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="jumbotron jumbotron-fluid">
            <div class="container pl-5 pr-5">
              <h1 class="display-4">Medical Equipment</h1>
              <a href="/catalog/med_equip" class="mt-2">Go to Medical Equipment</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
      <div class="jumbotron jumbotron-fluid">
          <div class="container pl-5 pr-5">
            <h1 class="display-4">List Data Medicines (DB)</h1>
            <a href="/obat" class="mt-2">Go to List Data Medicines</a>
          </div>
      </div>
  </div>
  <div class="container mt-5">
    <div class="jumbotron jumbotron-fluid">
        <div class="container pl-5 pr-5">
          <h1 class="display-4">List Data Medicines by Category (DB)</h1>
          <a href="/kategori_obat" class="mt-2">Go to List Data Medicines by Category</a>
        </div>
    </div>
  </div>
    {{-- end Content --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>