@extends('templates.template')

@section('content')
    <h1 class = 'text-center'> Cadastrar </h1>

    <div class = "col-8 m-auto">

        <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
            @csrf
            <input class="form-control" type="text" name="title" id="title" placeholder="Title">
            <select class="form-control" name="id_user" id="id_user">
                <option value="">Author</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            <input class="form-control" type="text" name="pages" id="pages" placeholder="Pages">
            <input class="form-control" type="text" name="price" id="price" placeholder="Price">
            <input class="btn btn-primary" type="submit" value="Cadastrar">


        </form>

    </div>

@endsection
