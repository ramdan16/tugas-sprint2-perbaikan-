@extends('layout.master')

@section('content')
<h3 class="text-center">Update Suppliers</h3>

<form class="form-horizontal" method="POST" action="/blogy/update/{{$blog->id }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name:</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ $blog->name }}" required>
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
        <label for="address" class="col-md-4 control-label">Address:</label>
        <div class="col-md-6">
            <input id="address" type="text" class="form-control" name="address" value="{{ $blog->address }}" required>
            @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('zip_code') ? ' has-error' : '' }}">
        <label for="zip_code" class="col-md-4 control-label">Zip Code:</label>
        <div class="col-md-6">
            <input id="zip_code" type="text" class="form-control" name="zip_code" value="{{ $blog->zip_code }}" required>
            @if ($errors->has('zip_code'))
            <span class="help-block">
                <strong>{{ $errors->first('zip_code') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('postal_code') ? ' has-error' : '' }}">
        <label for="postal_code" class="col-md-4 control-label">Postal Code:</label>
        <div class="col-md-6">
            <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{ $blog->postal_code }}" required>
            @if ($errors->has('postal_code'))
            <span class="help-block">
                <strong>{{ $errors->first('postal_code') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('region') ? ' has-error' : '' }}">
        <label for="region" class="col-md-4 control-label">Region:</label>
        <div class="col-md-6">
            <input id="region" type="text" class="form-control" name="region" value="{{ $blog->region }}" required>
            @if ($errors->has('region'))
            <span class="help-block">
                <strong>{{ $errors->first('region') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
        <label for="city" class="col-md-4 control-label">City:</label>
        <div class="col-md-6">
            <input id="city" type="text" class="form-control" name="city" value="{{ $blog->city }}" required>
            @if ($errors->has('city'))
            <span class="help-block">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
        <label for="country" class="col-md-4 control-label">Country:</label>
        <div class="col-md-6">
            <input id="country" type="text" class="form-control" name="country" value="{{ $blog->country }}" required>
            @if ($errors->has('country'))
            <span class="help-block">
                <strong>{{ $errors->first('country') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contact_title') ? ' has-error' : '' }}">
        <label for="contact_title" class="col-md-4 control-label">Contact_Title:</label>
        <div class="col-md-6">
            <input id="contact_title" type="text" class="form-control" name="contact_title" value="{{ $blog->contact_title }}" required>
            @if ($errors->has('contact_title'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_title') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contact_name') ? ' has-error' : '' }}">
        <label for="contact_name" class="col-md-4 control-label">Contact_Name:</label>
        <div class="col-md-6">
            <input id="contact_name" type="text" class="form-control" name="contact_name" value="{{ $blog->contact_name }}" required>
            @if ($errors->has('contact_name'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_name') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contact_phone') ? ' has-error' : '' }}">
        <label for="contact_phone" class="col-md-4 control-label">Contact_Phone:</label>
        <div class="col-md-6">
            <input id="contact_phone" type="text" class="form-control" name="contact_phone" value="{{ $blog->contact_phone }}" required>
            @if ($errors->has('contact_phone'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_phone') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contact_fax') ? ' has-error' : '' }}">
        <label for="contact_fax" class="col-md-4 control-label">Contact_Fax:</label>
        <div class="col-md-6">
            <input id="contact_fax" type="text" class="form-control" name="contact_fax" value="{{ $blog->contact_fax }}" required>
            @if ($errors->has('contact_fax'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_fax') }}</strong>
            </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('contact_email') ? ' has-error' : '' }}">
        <label for="contact_email" class="col-md-4 control-label">Contact_Email:</label>
        <div class="col-md-6">
            <input id="contact_email" type="text" class="form-control" name="contact_email" value="{{ $blog->contact_email }}" required>
            @if ($errors->has('contact_email'))
            <span class="help-block">
                <strong>{{ $errors->first('contact_email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
            <input type="reset" class="btn btn-danger" value="reset">
            
        </div>
    </div>
</form>
</div>
</div>
@endsection
@section('js')
<script>
    function changeProfile() {
        $('#image').click();
    }
    $('#image').change(function () {
        var imgPath = $(this)[0].value;
        var ext = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
        if (ext == "gif" || ext == "png" || ext == "jpg" || ext == "jpeg")
            readURL(this);
        else
            alert("Please select image file (jpg, jpeg, png).")
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.readAsDataURL(input.files[0]);
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
                $('#remove').val(0);
            }
        }
    }
    function removeImage() {
        $('#preview').attr('src', '{{url('images/noimage.jpg')}}');
        $('#remove').val(1);
    }
</script>
@endsection