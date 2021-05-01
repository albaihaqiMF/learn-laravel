@extends('layout.app',['title'=>'Index'])


@section('body')
<h1>this is item's page</h1>
<div class="row">
    @forelse ($items as $item)
    <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{$item->image ? $item->image : asset('images/box-default.jfif')}}" class="card-img-top"
                alt="{{$item->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">
                    {{Str::limit($item->description, 50)}}
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    @empty
    <div class="d-flex justify-content-center py-4">
        <div class="alert alert-info">
            <h3>There's No record</h3>
        </div>
    </div>
    @endforelse
    <div class="d-flex justify-content-between p-4">
        <div class="pagination">
            {{$items->links()}}
        </div>
        <div class="new-item">
            <a href="/item/create" class="btn btn-primary">CREATE NEW</a>
        </div>

    </div>
</div>
@endsection