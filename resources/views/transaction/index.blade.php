@extends('layouts.conquer')
@section('javascript')
  <script>
    function getDetailData(id) {
      $.ajax({
        type: 'POST',
        url: '{{ route("transaction.showAjax") }}',
        data: '_token= <?php echo csrf_token() ?> &id='+id,
        success:function(data) {
          $("#msg").html(data.msg);
        }
      });
    }
  </script>
@endsection
@section('content')
<h2>Daftar Transaksi</h2> 
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pembeli</th>
        <th>Kasir</th>
        <th>Tanggal Transaction</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{ $d->id }}</td>
        <td>{{ $d->buyer->name }}</td>
        <td>{{ $d->user->name }}</td>
        <td>{{ $d->transaction_date }}</td>
        <td><a class='btn btn-default' data-toggle='modal' href="#basic"
            data-target="#msg" onclick="getDetailData({{ $d->id }});">Lihat Rincian Pembelian</a>        
          <div class="modal fade" id="msg" tabindex="-1" role="basic" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- put animated gif here -->
                <img src="{{ asset('conquer2/img/ajax-modal-loading.gif') }}" alt="" class="loading">
              </div>
            </div>
         </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
