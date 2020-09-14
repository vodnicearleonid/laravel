@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent

    <div>
        <h4>About</h4>
        <p>Lorem Ipsum <em> is simply dummy text of the printing </em>and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
    </div>

@endsection

@section('content')
    @include('default.content')
@endsection
