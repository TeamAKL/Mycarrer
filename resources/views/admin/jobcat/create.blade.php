@extends("layouts.master")
@section("content")
<div class="container custom-margin">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center">Create Job Category Form</h2>
            <form action="{{url('job-category')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input id="name" type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <input type="submit" value="Create" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection


