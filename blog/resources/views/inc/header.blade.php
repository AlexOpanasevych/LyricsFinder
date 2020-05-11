@section('header')
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="{{route('home')}}">LyricsFinder</a></h5>
        <form action="/search" method="post" class="form-inline mt-2 mt-md-0">
            <div class="md-form active-pink-2">
                <input id="search-input" class="form-control" type="search" placeholder="Введіть автора чи жанр" aria-label="Search">
                <input id="search-submit" type="submit" value='Search' hidden="hidden"/>
                <script>
                    var input = document.getElementById("search-input");
                    input.addEventListener("keyup", function(event) {
                        if (event.key === "Enter") {
                            event.preventDefault();
                            document.getElementById("search-submit").click();
                        }
                    });
                </script>
            </div>
        </form>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{route('home')}}">На головну</a>
            <a class="p-2 text-dark" href="{{route('lyrics-data')}}">Список текстів</a>
        </nav>
        <a class="btn btn-outline-primary" href="{{route('lyrics-signin')}}">Увійти</a>
    </div>
