@section('header')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('home')}}">LyricsFinder</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{route('home')}}">На головну</a>
            <a class="p-2 text-dark" href="{{route('lyrics-data')}}">Список текстів</a>
        </nav>
        <a class="btn btn-outline-primary" href="{{route('lyrics-signin')}}">Увійти</a>
    </div>
