@extends('layouts.layout')

@section('content')
@if(session('message'))
<div class="alert alert-warning" role="alert">
    {{ session('message')}}
</div>
@endif
<h4>書籍一覧</h4>
<div class="row">
    @foreach($books as $book)
    <div class="col-md-6 col-lg-4 mt-5">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/img/book_img/'.$book->img) }}">
            <div class="card-body">
                <h5 class="card-title">{{ $book->name }}</h5>
                <div class="row">
                    <form action="{{ route('bookcart.store') }}" method="post">
                        @csrf
                        <input type="hidden" name="cartid" value="{{ $book->id }}">
                        <input type="submit" class="btn btn-info mr-3 ml-3" value="ブックカートへ"></a>
                    </form>
                    <a href="/book/{{ $book->id }}" class="text-primary btn-white btn">書籍詳細</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection