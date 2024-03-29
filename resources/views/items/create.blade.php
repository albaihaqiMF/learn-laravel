@extends('layouts.app')

@section('content')
<div class="container-fluid pt-4">
    <div class="row">
        <div class="col-sm-4">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="title" class="form-control" autocomplete="off">
                    @error('title')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                    @error('description')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
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
</div>
@endsection