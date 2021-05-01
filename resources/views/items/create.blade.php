@extends('layout.app')

@section('body')
<div class="row">
    <div class="col-sm-4">
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="Title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="Image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="d-flex justify-content-center form-group p-1">
                <button type="submit" class="btn btn-primary">POST</button>
            </div>
        </form>
    </div>
</div>
@endsection