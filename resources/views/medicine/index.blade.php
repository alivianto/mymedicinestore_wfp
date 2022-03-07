<!DOCTYPE html>
<html lang="en">
<head>
  <title>Obat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="container">
        <div class="row mt-4">
        @foreach($listData as $data)
            <div class="col-md-4 mt-4" >
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/'.$data->image) }}" alt="" style="height:300px">
                    <div class="card-body">
                        <h6 class="card-title">{{ $data->generic_name }} {{ $data->form  }}</h6>
                        <p>Rp. {{ $data->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
      </div>
    </div>
     
  {{-- List Medicines (Table) --}}

  {{-- <h2>List Medicines</h2>
  <p>The .table-hover class enables a hover state (grey background on mouse over) on table rows:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>id</th>
        <th>generic_name</th>
        <th>form</th>
        <th>restriction_formula</th>
        <th>price</th>
        <th>image</th>
        <th>description</th>
        <th>faskes_tk1</th>
        <th>faskes_tk2</th>
        <th>faskes_tk3</th>
        <th>created_at</th>
        <th>updated_at</th>
        <th>category_id</th>
      </tr>
    </thead>
    <tbody>
      @foreach($listData as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->price }}</td>
        <td>{{ $li->image }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->faskes_tk1 }}</td>
        <td>{{ $li->faskes_tk2 }}</td>
        <td>{{ $li->faskes_tk3 }}</td>
        <td></td>
        <td></td>
        <td>{{ $li->category_id }}</td>
      </tr>
      @endforeach
    </tbody>
  </table> --}}

  
</div>

</body>
</html>
