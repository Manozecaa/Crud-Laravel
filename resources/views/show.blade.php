@extends('templates.template')

@section('content')
    <h1 class = 'text-center'> Crud </h1>

    <div class = "col-8 m-auto">
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
        <strong>Title: </strong>{{$book->title}}<br>
        <strong>Pages: </strong>{{$book->pages}}<br>
        <strong>Price: </strong>R${{$book->price}}<br>
        <strong>Author: </strong>{{$user->name}}<br>
        <strong>E-mail's Author: </strong>{{$user->email}}<br>

    </div>

@endsection
