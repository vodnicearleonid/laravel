@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
    <div class="jumbotron">
        <h2 class="display-4">Hello, About!</h2>
        <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
        <hr class="my-4">
        <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </p>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-4">About Fluid jumbotron</h3>
            <p class="lead">Это модифицированный jumbotron, который занимает все горизонтальное пространство своего родителя.</p>
            <p class="lead">Это модифицированный  родителя.</p>
            <p class="lead">Это модифицированный jumbotron, который занимает все горизонтальное  родителя.</p>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3 class="display-4">About</h3>
            <p class="lead">Это модифицированный своего родителя.</p>
            <p class="lead">Это модифицированный jumbotron, который занимает все горизонтальное пространство своего родителя.</p>
            <p class="lead">Это модифицированный jumbotron, который пространство своего родителя.</p>
        </div>
    </div>

    @foreach($items AS $item)
        <h1>{{ $item->name }}</h1>
        <pre>{!! $item->text  !!}</pre>
    @endforeach
@endsection
