<!--begin::Body-->
<div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body justify-content-center">
                @if(!empty($item))
                    <img id="preview_img" src="{{ asset('dist/img/fur/'.$item->img) }}" width="450" height="250">
                @else
                    <img id="preview_img" src="" width="450" height="250" style="display: none;"/>
                @endif
                <h3>Drag and drop files you want to upload</h3>
                <h5>(file format supported: jpeg, png, pdf)</h5>
                <h6 class="text-danger">Max file size : 10MB</h6>
                <label for="logo_image" class="btn btn-primary float-right">Select images</label>
                <input id="logo_image" style="visibility:hidden;" type="file" name="logo_image" class="form-control" onchange="loadFile(event)">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Name <span class="text-danger">*</span></label>
                @if(empty($item))
                <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter title"/>
                @else
                <input type="text" class="form-control" name="name" value="{{ $item->name }}" placeholder="Enter title"/>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Type <span class="text-danger">*</span></label>
                @if(empty($item))
                   <select name="type_id" id="type_id" class="form-control">
                        <option value="">--Select Type--</option>
                        <option value="1">Table</option>
                        <option value="2">Chair</option>
                        <option value="3">Bed</option>
                        <option value="4">Walldrobe</option>
                    </select>
                @else
                    <select name="type_id" id="type_id" class="form-control">
                        <option value="">--Select Type--</option>
                        <option value="1" {{ $item->type_id == $item->type_id ? 'selected':'' }}>Table</option>
                        <option value="2" {{ $item->type_id == $item->type_id ? 'selected':'' }}>Chair</option>
                        <option value="3" {{ $item->type_id == $item->type_id ? 'selected':'' }}>Bed</option>
                        <option value="4" {{ $item->type_id == $item->type_id ? 'selected':'' }}>Walldrobe</option>
                    </select>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Details <span class="text-danger">*</span></label>
                @if(empty($item))
                <input type="text" class="form-control" name="details" value="{{ old('details') }}" placeholder="Enter Details"/>
                @else
                <input type="text" class="form-control" name="details" value="{{ $item->details }}" placeholder="Enter Details"/>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Remarks </label>
                @if(empty($item))
                <textarea name="remarks" class="form-control" placeholder="Enter remarks">{{ old('remarks') }}</textarea>
                @else
                <textarea name="remarks" class="form-control" placeholder="Enter remarks">{{ $item->remarks }}</textarea>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Price <span class="text-danger">*</span></label>
                @if(empty($item))
                <input type="text" class="form-control" name="price" value="{{ old('price') }}" placeholder="Enter price"/>
                @else
                <input type="text" class="form-control" name="price" value="{{ $item->price }}" placeholder="Enter price"/>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Status </label>
                @if(empty($item))
                <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                    <input type="checkbox" name="status" value='1' checked="checked">
                    <span></span>&nbsp;&nbsp; Enable/Disable
                </label>
                @else
                <label class="checkbox checkbox-lg checkbox-lg flex-shrink-0 mr-4">
                    <input type="checkbox" name="status" value='1' @if($item->status == 1 ) checked @endif>
                    <span></span>&nbsp;&nbsp; Enable/Disable
                </label>
                @endif
            </div>
        </div>
    </div>
</div>            
<!--end::Body-->
<div class="card-footer" style="background: khaki;">
    <button type="submit" class="btn btn-primary mr-2">Save</button>
    <input type="reset" class="btn btn-warning mr-2" value="Reset"/>
	<a href="{{ route('item.index') }}" class="btn btn-secondary">Back</a>
</div>
@push('scripts')
<script>
    $(function(){
        $('#type_id').select2({});
    });
    var loadFile = function(event) {
        var image = document.getElementById('preview_img');
        image.src = URL.createObjectURL(event.target.files[0]);
        image.style.display = 'inline';
    };
</script>
@endpush