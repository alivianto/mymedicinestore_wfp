{{-- @dd($data) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyStore | Catalog - Equipments</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .card {
            display: inline-block;
            text-align: center;
        }
    </style>
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
        <h1>Medical Equipment</h1>
        <div class="card mt-2" style="width: 200px;">
             <img class="card-img-top" src="{{ asset('img/suntik.jpg') }}" alt="">
             <div class="card-body">
                <h6 class="card-title">Syringe Spuid Spuit-Jarum Suntik-Suntikan Tinta-5cc 5ml 5 cc ml</h6>
                <a href="/equipments/1" class="btn btn-outline-secondary">View Products</a>
            </div>
        </div>
        <div class="card mt-2" style="width: 200px;">
            <img class="card-img-top" src="{{ asset('img/mikroskop.jpg') }}" alt="">
            <div class="card-body">
               <h6 class="card-title">Mikroskop binokuler perbesaran 1600x</h6>
               <a href="/equipments/2" class="btn btn-outline-secondary">View Products</a>
           </div>
       </div>
        <br><br>
        <a href="/catalog">Go back to Catalog</a>
        <br><br><br>
    </div>
    {{-- end Content --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>