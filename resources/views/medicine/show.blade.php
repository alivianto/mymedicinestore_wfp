<div style="padding: 10px 20px;">
  @if($message)
    <h1>List Medicines</h1>
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Name</th>
          <th>Form</th>
          <th>Restriction Formula</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $message->generic_name }}</td>
          <td>{{ $message->form }}</td>
          <td>{{ $message->restriction_formula }}</td>
        </tr>
      </tbody>
    </table>
    {{-- <div class="container">
        <div class="row mt-4">
            <div class="col-md-4 mt-4" >
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/'.$message->image) }}" alt="" style="height:300px">
                    <div class="card-body">
                        <h6 class="card-title">{{ $message->generic_name }} {{ $message->form  }}</h6>
                        <p>Rp. {{ $message->price }}</p>
                        <p><b>Kategori: {{ $message->category->name }}</b></p>
                    </div>
                </div>
            </div>
      </div>
    </div> --}}
  @else
    <h1>Tidak ada data</h1>
  @endif
</div>
