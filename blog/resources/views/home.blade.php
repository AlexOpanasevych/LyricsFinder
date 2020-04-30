@extends('layouts.template')
@section('title')Привіт!@endsection
@section('content')<h3 style="text-align: center">Вітаю тебе на своєму сайті</h3>@endsection
@section('newsletter')
    @parent
    <h2>вкладеності і директиви parent</h2>
@endsection
