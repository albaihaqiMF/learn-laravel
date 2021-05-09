@extends('layouts.app',['title'=>'Update Post'])

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <h1>Update Post:{{$item->title}}</h1>
            <form action="" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="Title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ old('title') ?? $item->title}}">
                    @error('title')
                    <div class="text-danger mt-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea name="description"
                        class="form-control">{{old('description') ?? $item->description}}</textarea>
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
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection