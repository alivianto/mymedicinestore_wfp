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
                <img class="produk-img" src="{{ asset('img/paracetamol.jpg') }}" alt="">
            </div>
            <div class="produk-content">
                <h3 class="card-title">Paracetamol inf</h3>
                <p>Rp. 35.000</p>
                <p>Paracetamol (Acetaminophen) Paracetamol adalah obat untuk meredakan demam dan nyeri, termasuk nyeri haid atau sakit gigi. Paracetamol atau acetaminophen tersedia dalam bentuk tablet, sirop, tetes, suppositoria, dan infus.</p>
                <p><b> Dosis dan Aturan Pakai Paracetamol (Acetaminophen) </b></p>
                <p>Dosis paracetamol akan disesuaikan dengan bentuk sediaan obat, tujuan penggunaan, dan usia pasien. Secara umum, berikut dosis paracetamol tablet atau suppositoria untuk meredakan nyeri dan demam, sesuai usia pasien:</p>
                <ul>
                    <li>Dewasa: 500-1.000 mg atau 10–15 mg/kgBB, tiap 4–6 jam. Dosis maksimal 4.000 mg per hari.</li>
                    <li>Bayi dan anak-anak: 10–15 mg/kgBB, tidak 4–6 jam. Dosis tidak boleh lebih dari 15 mg/kgBB per dosis.</li>
                </ul>
                <p>Dosis untuk anak-anak berusia dibawah 2 tahun akan ditentukan oleh dokter. Khusus untuk paracetamol infus, dosis dan pemberiannya akan dilakukan langsung oleh dokter atau petugas medis di bawah pengawasan dokter sesuai kondisi pasien.</p>
            </div>
        @elseif ($id == 2)
            <div class="produk-img-container">
                <img class="produk-img" src="{{ asset('img/diapet.jpg') }}" alt="">
            </div>
            <div class="produk-content">
                <h3 class="card-title">Tajir Diapet 1 Strip</h3>
                <p>Rp. 3.300</p>
                <p><b>Deskripsi</b></p>
                <p>Diapet capsul mengandung ekstrak daun jambu bii dan ekstrak herbal lainnya yang efektif untuk mengatasi mencret/ diare.</p>
                <p><b>Komposisi</b></p>
                <p>Ekstrak psidii folium 23,5 %, ekstrak curcumae domesticae rhizoma 12,5 %, ekstrak coix lacrima jobi semen 18 %, ekstrak phellodendri radix 23 %, ekstrak coptidis rhizoma 23 %</p>
                <p><b>Indikasi</b></p>
                <p>Mengobati mencret dan memadatkan kembali faeces yang cair, mengatasi rasa mulas.</p>
                <p><b>Dosis</b></p>
                <p>Dewasa dan Anak : 2 - 3 x sehari 2 kapsul. Untuk menyembuhkan diare akut : 2 x sehari 2 kapsul.</p>
                <p><b>Penyajian</b></p>
                <p>Sesudah makan.</p>
                <p><b>Perhatian</b></p>
                <p>Hindari makanan / minuman yang asam dan pedas selama belum sembuh.</p>
                <p><b>Kemasan</b></p>
                <p>Strip, 4 Kaps.</p>
            </div>
        @elseif ($id == 3)
            <div class="produk-img-container">
                <img class="produk-img" src="{{ asset('img/betadine.jpg') }}" alt="">
            </div>
            <div class="produk-content">
                <h3 class="card-title">Betadin kecil</h3>
                <p>Rp. 6.700</p>
                <p>Betadine bermanfaat untuk mencegah pertumbuhan dan membunuh kuman penyebab infeksi pada kulit, seperti infeksi akibat luka gores atau luka bakar ringan. Obat antiseptik ini tersedia dalam bentuk cairan, salep, semprot, dan stik. Betadine mengandung povidone iodine sebagai bahan aktif utama.</p>
                <p><b>Cara Menggunakan Betadine dengan Benar</b></p>
                <p>Ikuti anjuran dokter dan baca informasi yang tertera pada kemasan sebelum menggunakan Betadine.</p>
                <p>Pastikan permukaan kulit telah bersih sebelum menggunakan Betadine. Gunakan Betadine secukupnya di permukaan kulit. Hindari mengoleskan Betadine di area mata dan area lain yang tidak mengalami luka.</p>
                <p>Simpan Betadine di tempat yang sejuk dan terhindar dari sinar matahari langsung, serta jauhkan dari jangkauan anak-anak.</p>
            </div>
        @endif
    </div>
    <div class="container mt-5">
        <a class="back" href="/catalog/medicines">Back</a>
    </div>
    {{-- end Content --}}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>