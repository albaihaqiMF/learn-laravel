@extends('layouts.app',['title'=>'Index'])


@section('content')
<div class="container-fluid">
    <div class="container">

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
        <div class="row w-100">
            @forelse ($items as $item)
            <div class="col-sm-3 my-3">
                <div class="card h-100">
                    <img src="{{$item->image ? $item->image : asset('images/default-article.jfif')}}"
                        class="card-img-top" alt="{{$item->title}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">
                            {{Str::limit($item->description, 35)}}
                            <a href="/item/{{$item->slug}}">Read More.</a>
                        </p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        @auth
                        <a href="/item/{{$item->slug}}/edit" class="btn text-success"><i class="far fa-edit"></i></a>

                        @endauth
                        {{-- <p>Published : {{ $item->created_at->format("d F, Y") }}</p> --}}
                        {{-- @if (auth()->check())
                            <div>Logged In</div>
                        @endif --}}
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
                    @auth
                    <a href="{{ route('items.create.get') }}" class="btn btn-primary">CREATE NEW</a>

                    @endauth
                </div>
            </div>
        </div>

    </div>
</div>
@endsection