<div style="padding: 30px 100px;">
  <div class="portlet">
    <div class="portlet-title">
      <b>Tampilan Transaksi dari: {{ $data->id }} - {{ $data->transaction_date }}</b>
    </div>
    <div class="portlet-body">
      <div class="row">
        {{-- @dd($dataProduk) --}}
        @foreach($dataProduk as $dp)
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="" alt="">
            <div class="caption">
              <p align="center"><b>{{ $dp->generic_name }}</b></p>
              <hr>
              <p>Kategori: {{ $dp->category->name }}</p>
              <p>Harga: Rp. {{ $dp->price }}</p>
              <p>Jumlah Beli: {{ $dp->pivot->quantity }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
