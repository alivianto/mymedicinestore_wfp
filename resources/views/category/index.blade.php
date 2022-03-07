<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obat per Kategori</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <?php
        $id = (isset($_GET['id'])) ? $_GET['id'] : $listDataC[0]->id;
    ?>
    <div class="dropdown">
        <button class="btn dropdown-toggle border mt-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @foreach($listDataC as $category)
                @if($category->id == $id)
                    {{ $category->name }}
                @endif
            @endforeach
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach($listDataC as $category)
            <a class="dropdown-item" href="?id={{ $category->id }}">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
        @foreach($listDataM as $data)
            @if($data->category_id == $id)
                <div class="col-md-4 mt-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('images/'.$data->image) }}" alt="">
                        <div class="card-body">
                            <h6 class="card-title">{{ $data->generic_name }} {{ $data->form  }}</h6>
                            <p>Rp. {{ $data->price }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        </div>
    </div>
</div>
</body>
</html>
