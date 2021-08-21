@extends('layout')

@section('title')
Категории

@endsection


@section('content')
<h1>Категории</h1>

<div class="row">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Управление</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
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