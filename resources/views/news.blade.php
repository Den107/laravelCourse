@extends('layout')

@section('title')
Новости

@endsection

@section('content')
<!-- <div class="d-flex">
    @forelse($news as $n)

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Новость {{$n['title']}}</h5>
            <p class="card-text">{{$n['description']}} </p>
            <a href="/oneNews/ {{$n['id']}} " class="btn btn-primary">Показать</a>
        </div>
    </div>
    @empty
    <h2>Новостей нет!!!</h2>
    @endforelse
</div> -->

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @forelse($news as $newsItem)
                <tr>
                    <td>{{$newsItem->id}}</td>
                    <td>{{$newsItem->title}}</td>
                    <td>{{$newsItem->description}}</td>
                    <td>{{$newsItem->author}}</td>
                    <td>{{$newsItem->image}}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4">Пусто</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection