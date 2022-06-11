<form method="POST" action="{{ route('obat.update', $data->id) }}">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Medicine</h4>
    </div>
    <div class="modal-body">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="InputGenericName">Generic Name</label>
            <input type="text" class="form-control" id="InputGenericName" value="{{ $data->generic_name }}"
                name="generic_name" placeholder="Enter Generic Name">
        </div>
        <div class="form-group">
            <label for="InputForm">Form</label>
            <input type="text" class="form-control" id="InputForm" value="{{ $data->form }}" name="form"
                placeholder="Enter Form">
        </div>
        <div class="form-group">
            <label for="InputRestricitonFormula">Restriction Formula</label>
            <input type="text" class="form-control" id="InputRestricitonFormula"
                value="{{ $data->restriction_formula }}" name="restricition_formula"
                placeholder="Enter Restriction Formula">
        </div>
        <div class="form-group">
            <label for="InputPrice">Price</label>
            <input type="text" class="form-control" id="InputPrice" value="{{ $data->price }}" name="price"
                placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label for="">Image</label><br>
            <img src="{{ asset('images/'.$data->image) }}" alt="" width="50%">
            <input type="file" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="InputDescription">Description</label>
            <textarea class="form-control" id="InputDescription" value="{{ $data->description }}" name="description"
                rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="InputFaskesTK1">Faskes TK1</label>
            <select name="faskes1" class="form-control">
                <option value="0" {{ $data->faskes_tk1 == 0 ? 'selected' : '' }}>Tidak</option>
                <option value="1" {{ $data->faskes_tk1 == 1 ? 'selected' : '' }}>Ya</option>
                {{-- @if ($data->faskes_tk1 == 0)
                <option value="0" selected>Tidak</option>
                <option value="1">Ya</option>
                @else
                <option value="0">Tidak</option>
                <option value="1" selected>Ya</option>
                @endif --}}
            </select>
        </div>
        <div class="form-group">
            <label for="InputFaskesTK2">Faskes TK2</label>
            <select name="faskes2" class="form-control">
                @if ($data->faskes_tk2 == 0)
                    <option value="0" selected>Tidak</option>
                    <option value="1">Ya</option>
                @else
                    <option value="0">Tidak</option>
                    <option value="1" selected>Ya</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="InputFaskesTK3">Faskes TK3</label>
            <select name="faskes3" class="form-control">
                @if ($data->faskes_tk3 == 0)
                    <option value="0" selected>Tidak</option>
                    <option value="1">Ya</option>
                @else
                    <option value="0">Tidak</option>
                    <option value="1" selected>Ya</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="InputCategory">Category</label>
            <select name="category" class="form-control">
                <option>Select Category</option>
                @foreach ($category as $c)
                    @if ($data->category_id == $c->id)
                        <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                    @else
                        <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Edit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
    </div>
</form>
