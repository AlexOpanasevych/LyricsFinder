@extends('layouts.template')
@section('title', 'Список доступних текстів')

@section('content')
    <h1 class="header">Список доступних текстів</h1>
    @if(!empty($data))
        @foreach($data as $el)
            <div class="alert alert-box">
                <h3>{{$el['name']}}</h3>
                <h4>Автор      {{$el['author']}}</h4>
                <h4>Композитор {{$el['musician']}}</h4>
                <h6>Текст пісні</h6>
                <p>{{$el['text']}}</p>
            </div>
        @endforeach
    @endif
@endsection
