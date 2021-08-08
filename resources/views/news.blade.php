@extends('layout')

@section('title')
Новости

@endsection

@section('content')
<div class="d-flex">
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
</div>


@endsection