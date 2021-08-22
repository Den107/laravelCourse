@extends('layout')

@section('title')
Добавить новость

@endsection


@section('content')
<h1>Добавить Категорию</h1>
<div class="container">
    <form method="POST" action="{{route(categories.add)}}">
        <div class="mb-3 mt-3">
            <label for="title" class="form-label">Название</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="bodyNews" class="form-label">Название категории</label>
            <textarea class="form-control" id="bodyNews" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>
</div>



@endsection