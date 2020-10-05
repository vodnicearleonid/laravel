@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')


{{--@foreach($homeworks AS $homework)
    <h1>{{ $homework->title }}</h1>
    <pre>{!! $homework->description  !!}</pre>
    <pre>{!! $homework->author  !!}</pre>
@endforeach--}}

{{--@foreach($tirreport AS $item)
    <h1>{{ $item->start }}</h1>
    <pre>{!! $item->stop  !!}</pre>
    <pre>{!! $item->driver  !!}</pre>
    <pre>{!! $item->truck  !!}</pre>
    <pre>{!! $item->author  !!}</pre>
@endforeach--}}

{{--@foreach($cars AS $item)
    <h1>{{ $item->producer }}</h1>
    <pre>{!! $item->body  !!}</pre>
    <pre>{!! $item->color  !!}</pre>
    <pre>{!! $item->wheels  !!}</pre>
    <pre>{!! $item->doors  !!}</pre>
@endforeach--}}

@foreach($ssds AS $item)
    <h1>{{ $item->video }}</h1>
    <pre>{!! $item->photo  !!}</pre>
    <pre>{!! $item->audio  !!}</pre>
    <pre>{!! $item->text  !!}</pre>
    <pre>{!! $item->author  !!}</pre>
@endforeach


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

   {{-- @foreach($items AS $item)
        <h1>{{ $item->name }}</h1>
        <pre>{!! $item->text  !!}</pre>
    @endforeach--}}
@endsection
