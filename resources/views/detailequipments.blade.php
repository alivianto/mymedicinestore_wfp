{{-- @dd($data) --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyStore | Catalog - Detail</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        .produk-img-container {
            float: left;
            width: 200px;
        }
        .produk-img {
            max-width: 100%;
        }
        .produk-content {
            padding-left: 220px;
        }
        .back {
            position: fixed;
            left: 90px;
            bottom: 20px;
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
        @if ($id == 1)
            <div class="produk-img-container">
                <img class="produk-img" src="{{ asset('img/suntik.jpg') }}" alt="">
            </div>
            <div class="produk-content">
                <h3 class="card-title">Syringe Spuid Spuit-Jarum Suntik-Suntikan Tinta-5cc 5ml 5 cc ml</h3>
                <p>Rp. 2.000</p>
                <p>Alat Suntik sudah termasuk jarum. Keadaan steril bersih dari micro organisme. Bisa digunakan untuk mengisi, menguras cartridge tinta, membilas print head, isi ulang parfum.</p>
           </div>
        @elseif ($id == 2)
            <div class="produk-img-container">
                <img class="produk-img" src="{{ asset('img/mikroskop.jpg') }}" alt="">
            </div>
            <div class="produk-content">
                <h3 class="card-title">Mikroskop binokuler perbesaran 1600x</h3>
                <p>Rp. 4.300.000</p>
                <p>Mikroskop binokuler 1600x model XSZ-107BN, objective 4x, 10x, 40x dan 100x,eyepiece WF10x, P16x</p>
            </div>
        @endif
    </div>
    <div class="container mt-5">
        <a class="back" href="/catalog/med_equip">Back</a>
    </div>
    {{-- end Content --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>