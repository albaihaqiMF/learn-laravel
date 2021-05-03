@extends('layout.app',['title'=>'Index'])


@section('body')
<h1>this is item's page</h1>
@if (session()->has('success'))
<div class="d-flex justify-content-center">
    <div class="alert alert-info">
        {{session()->get('success')}}
    </div>
</div>
@endif
@if (session()->has('delete'))
<div class="d-flex justify-content-center">
    <div class="alert alert-danger">
        {{session()->get('delete')}}
    </div>
</div>
@endif
<div class="row">
    @forelse ($items as $item)
    <div class="col-sm-3 my-3">
        <div class="card h-100">
            <img src="{{$item->image ? $item->image : asset('images/default-article.jfif')}}" class="card-img-top"
                alt="{{$item->title}}">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">
                    {{Str::limit($item->description, 35)}}
                    <a href="/item/{{$item->slug}}">Read More.</a>
                </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
                <a href="/item/{{$item->slug}}/edit" class="btn text-success"><i class="far fa-edit"></i></a>
                {{-- <p>Published : {{ $item->created_at->format("d F, Y") }}</p> --}}
                <p style="margin: auto 0">Published : {{ $item->created_at->diffForHumans() }}</p>
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