@extends('layout.app',['title'=>'Laravel 8'])

@section('body')
<div class="container border border-1 border-dark rounded-3 p-4">
    <div class="row">
        <div class="col-sm-3">

            <img src="{{$item->image ? $item->image : asset('images/default-article.jfif')}}" alt="{{$item->title}}"
                class="img-thumbnail">
        </div>
        <div class="col-sm-9">
            <h1>{{$item->title}}</h1>
        </div>
    </div>
    <div class="row">
        <p>{{$item->description}}</p>
    </div>
    <div class="d-flex justify-content-end">
        <form action="/item/{{$item->slug}}/delete" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></button>
        </form>
    </div>
</div>
@endsection