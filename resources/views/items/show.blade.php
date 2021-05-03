@extends('layout.app',['title'=>'Laravel 8'])

@section('body')
<div class="container w-75 rounded-3 p-4 shadow-lg">
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
        <p style="text-align: justify">{{$item->description}}</p>
    </div>
    <div class="d-flex justify-content-end">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            <i class="far fa-trash-alt"></i>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="/item/{{$item->slug}}/delete" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            @method('delete')
                            <h3>Are You Sure Want to Delete this Item?</h3>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection