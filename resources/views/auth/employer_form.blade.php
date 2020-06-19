<fieldset class="p-3">
    <legend>Company Information:</legend>
    <div class="form-group">
        <label for="cname">Company Name</label>
        <input type="text" name="company_name" class="form-control {{ $errors->has('company_name') ? ' is-invalid' : '' }}" id="cname" placeholder="Company Name">
        @if ($errors->has('company_name'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('company_name') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="cemail">Company Email</label>
        <input type="email" name="company_email" class="form-control" id="cemail" placeholder="Company Email">
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <p class="mb-8">Choose Logo</p>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="company_logo" name="company_logo">
                <label class="custom-file-label" for="company_logo">Choose Company Logo</label>
            </div>
            <img src="{{asset('images/hero-img.jpg')}}" id="banner-preview" class="img-thumbnail preview">
        </div>
        <div class="col-md-6">
            <label for="c-size">Size</label>
            <select name="size" id="c-size" class="form-control">
                <option>Size</option>
                <option value="1-5 employees">1-5 employees</option>
                <option value="6-10 employee">6-10 employees</option>
                <option value="11-20 employees">11-20 employees</option>
                <option value="51-100 employees">51-100 employees</option>
                <option value="101-200 employees">101-200 employees</option>
                <option value="201-500 employees">201-500 employees</option>
                <option value="501-1000 employees">501-1000 employees</option>
                <option value="1001-5000 employees">1001-5000 employees</option>
                <option value="5001-10000 employees">5001-10000 employees</option>
                <option value="10001-20000 employees">10001-20000 employees</option>
                <option value="More than 20000">More than 20000</option>
            </select>
        </div>
    </div>
    <hr>
    <legend class="text-center">Account Information:</legend>
    <input type="hidden" name="role_id" value="1">
    <div class="form-group row">
        <div class="col-md-6">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}">
            @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">{{ $errors->first('name') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}">
            @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">{{ $errors->first('email') }}</span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" name="phone_number" id="phone_number" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }}">
        @if ($errors->has('phone_number'))
        <span class="invalid-feedback" role="alert">{{ $errors->first('phone_number') }}</span>
        @endif
    </div>

    <div class="form-group row">
        <div class="col-md-6">
            <label for="password">Password </label>
            <input type="password" name="password" id="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}">
            @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="col-md-6">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="password_confirmation" id="confirm_password" class="form-control">
        </div>
    </div>

</fieldset>

@push('css')
<style>
    .custom-file-label {
        overflow: hidden;
    }
    fieldset {
        background-color: rgba(203, 198, 212, 0.3);
        /* box-shadow: 0 8px 6px -6px rgba(0,0,0,.13); */
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
        border-radius: 4px;
    }

    legend {
        background-color: #e9b62c;
        border: 1px solid #ddd;
        border-radius: 4px;
        color: #fff;
        font-size: 17px;
        font-weight: bold;
        padding: 3px 5px 3px 7px;
        width: auto;
        box-shadow: 0 5px 10px rgba(0,0,0,.2);
        /* box-shadow: 0 8px 6px -6px rgba(0,0,0,.13); */
    }

    .mb-8 {
        margin-bottom: 8px;
    }
</style>
@endpush

@push('script')
<script>
    // Image Preview
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        let $idname = $(this).attr("id");
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            if($idname == "logo") {
                document.getElementById("logo-preview").src = e.target.result;
            } else if($idname == "vision") {
                document.getElementById("vision-preview").src = e.target.result;
            } else if($idname == "mission") {
                document.getElementById("mission-preview").src = e.target.result;
            } else {
                document.getElementById("banner-preview").src = e.target.result;
            }
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush