@extends('layouts.conquer')
@section('content')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="fa fa-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#" onclick="showInfo()">Welcome
                    <i class="icon-bulb"></a></i>
            </li>
        </ul>
    </div>
    <div id='showinfo'></div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="alert alert-success" id="pesan" style="display:none;">

    </div>
@section('javascript')
    <script>
        function showInfo() {
            $.ajax({
                type: 'POST',
                url: '{{ route('obat.showInfo') }}',
                data: '_token=<?php echo csrf_token(); ?>',
                success: function(data) {
                    $('#showinfo').html(data.msg)
                }
            });
        }

        function getEditForm(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('obat.getEditForm') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id
                },
                success: function(data) {
                    $('#modalContent').html(data.msg);
                }
            });
        }

        function getEditForm2(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('obat.getEditForm2') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id
                },
                success: function(data) {
                    $('#modalContent').html(data.msg);
                }
            });
        }

        function saveDataUpdateTD(id) {
            var eGenericName = $('#eGenericName').val();
            var eForm = $('#eForm').val();
            var eResForm = $('#eResForm').val();
            var ePrice = $('#ePrice').val();
            var eDesc = $('#eDesc').val();
            var eF1 = $('#eF1').val();
            var eF2 = $('#eF2').val();
            var eF3 = $('#eF3').val();
            var eCategory = $('#eCategory').val();


            $.ajax({
                type: 'POST',
                url: '{{ route('obat.saveData') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id,
                    'generic_name': eGenericName,
                    'form': eForm,
                    'restricition_formula': eResForm,
                    'price': ePrice,
                    'description': eDesc,
                    'faskes1': eF1,
                    'faskes2': eF2,
                    'faskes3': eF3,
                    'category': eCategory
                },
                success: function(data) {
                    if (data.status == "oke") {

                        $('#td-generic_name-' + id).html(eGenericName);
                        $('#td-form-' + id).html(eForm);
                        $('#td-restriction_formula-' + id).html(eResForm);
                        $('#td-price-' + id).html(ePrice);
                        $('#td-description-' + id).html(eDesc);
                        $('#td-faskes_tk1-' + id).html(eF1);
                        $('#td-faskes_tk2-' + id).html(eF2);
                        $('#td-faskes_tk3-' + id).html(eF3);
                        $('#td-category-' + id).html(eCategory);
                        // alert(data.msg);
                        $('#pesan').show();
                        $('#pesan').html(data.msg);
                    }
                }
            });
        }

        function deleteDataRemoveTR(id) {
            $.ajax({
                type: 'POST',
                url: '{{ route('obat.deleteData') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id
                },
                success: function(data) {
                    if (data.status == "oke") {
                        alert(data.msg);
                        $('#tr_' + id).remove();
                    } else {
                        alert(data.msg);
                    }
                }
            });
        }
    </script>
@endsection
@section('initialscript')
<script>
    $('.editable').editable({
        closeOnEnter: true,
        callback:function(data) {
            if(data.content){
                //alert(data.content);
                var m_id = data.$el[0].id;
                var col_name = m_id.split('-')[1];
                var col_id = m_id.split('-')[2];

                $.ajax({
                    type: 'POST',
                    url: '{{ route("obat.saveDataField") }}',
                    data: {'_token':'<?php echo csrf_token() ?>',
                            'id' : col_id,
                            'name' : col_name,
                            'value': data.content 
                        },
                    success: function(data){
                        alert(data.msg);
                    }
                });
                // td_name_1


            } else {
                alert("Tidak ada perubahan data");
            }
        }
    });



</script>
@endsection

{{-- <div class="container">
        <div class="row mt-4">
        @foreach ($listData as $data)
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
    </div> --}}
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">DISCLAIMER</h4>
            </div>
            <div class="modal-body">
                Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<h2>List Medicines</h2>
<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
<a href="{{ url('medicineform/create') }}" class="btn btn-info" type="button">+ Medicines Baru</a>
<a href="#modalCreate" data-toggle="modal" class="btn btn-info">+ Medicines Baru (modal)</a>
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
            <th>category_id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($listData as $li)
            <tr id="tr_{{ $li->id }}">
                <td>
                    <a class="btn btn-default" data-toggle="modal" href="#detail_{{ $li->id }}"
                        data-toggle="modal">{{ $li->id }}</a>
                    <div class="modal fade" id="detail_{{ $li->id }}" tabindex="-1" role="basic"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{ $li->generic_name }}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ asset('images/' . $li->image) }}" height='200px' />
                                    <p><b>Description:</b></p>
                                    <p>{{ $li->description }}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td class="editable" id="td-generic_name-{{ $li->id }}">{{ $li->generic_name }}</td>
                <td class="editable" id="td-form-{{ $li->id }}">{{ $li->form }}</td>
                <td class="editable" id="td-restriction_formula-{{ $li->id }}">{{ $li->restriction_formula }}</td>
                <td class="editable" id="td-price-{{ $li->id }}">{{ $li->price }}</td>

                <td><img src="{{ asset('images/'.$li->image) }}" alt="" width="100%"></td>
                <td class="editable" id="td-description-{{ $li->id }}">{{ $li->description }}</td>
                <td class="editable" id="td-faskes_tk1-{{ $li->id }}">{{ $li->faskes_tk1 }}</td>
                <td class="editable" id="td-faskes_tk2-{{ $li->id }}">{{ $li->faskes_tk2 }}</td>
                <td class="editable" id="td-faskes_tk3-{{ $li->id }}">{{ $li->faskes_tk3 }}</td>
                <td id="td_category_{{ $li->id }}">{{ $li->category_id }}</td>
                <td>
                    <a class='btn btn-info' href="{{ route('obat.show', $li->id) }}"
                        data-target="#show{{ $li->id }}" data-toggle='modal'>detail</a>
                    <div class="modal fade" id="show{{ $li->id }}" tabindex="-1" role="basic"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- put animated gif here -->
                                <img src="{{ asset('conquer2/img/ajax-modal-loading.gif') }}" alt=""
                                    class="loading">
                            </div>
                        </div>
                    </div>
                    {{-- <a class="btn btn-info" href="{{ route('obat.edit', $li->id) }}">Edit</a> --}}
                    <a class="btn btn-info" href="{{ url('obat/' . $li->id . '/edit') }}">Edit</a>
                    <a href="#modalEdit" data-toggle='modal' class="btn btn-warning"
                        onclick="getEditForm({{ $li->id }})">Edit A</a>
                    <a href="#modalEdit" data-toggle='modal' class="btn btn-warning"
                        onclick="getEditForm2({{ $li->id }})">Edit B</a>
                    <form method="POST" action="{{ url('obat/' . $li->id) }}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="delete" class="btn btn-danger"
                            onclick="if(!confirm('Are you sure to delete this record?')) return false;">
                    </form>
                    <a class="btn btn-danger"
                        onclick="if(confirm('Are you sure to delete this record?')) deleteDataRemoveTR({{ $li->id }})">Delete
                        2</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- Modal Form --}}
<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="{{ route('obat.store') }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add New Medicine</h4>
                </div>
                <div class="modal-body">

                    @csrf
                    <div class="form-group">
                        <label for="InputGenericName">Generic Name</label>
                        <input type="text" class="form-control" id="InputGenericName" name="generic_name"
                            placeholder="Enter Generic Name">
                    </div>
                    <div class="form-group">
                        <label for="InputForm">Form</label>
                        <input type="text" class="form-control" id="InputForm" name="form" placeholder="Enter Form">
                    </div>
                    <div class="form-group">
                        <label for="InputRestricitonFormula">Restriction Formula</label>
                        <input type="text" class="form-control" id="InputRestricitonFormula"
                            name="restricition_formula" placeholder="Enter Restriction Formula">
                    </div>
                    <div class="form-group">
                        <label for="InputPrice">Price</label>
                        <input type="text" class="form-control" id="InputPrice" name="price"
                            placeholder="Enter Price">
                    </div>
                    <div class="form-group">
                        <label for="InputDescription">Description</label>
                        <textarea class="form-control" id="InputDescription" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="InputFaskesTK1">Faskes TK1</label>
                        <select name="faskes1" class="form-control">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputFaskesTK2">Faskes TK2</label>
                        <select name="faskes2" class="form-control">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputFaskesTK3">Faskes TK3</label>
                        <select name="faskes3" class="form-control">
                            <option value="0">Tidak</option>
                            <option value="1">Ya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputCategory">Category</label>
                        <select name="category" class="form-control">
                            <option>Select Category</option>
                            @foreach ($cdata as $c)
                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Edit --}}
<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modalContent">
            <div style="padding: 10px; text-align: center;">
                <img src="{{ asset('conquer2/img/ajax-modal-loading.gif') }}" alt="" class="loading">
            </div>
        </div>
    </div>
</div>
@endsection
