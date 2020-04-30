@extends('layouts.template')
@section('content')<form action="/signin" method="post" class="form-signin">
    @csrf
    <h1 class="h3 mb-3 font-weight-normal">Вхід</h1>
    <label for="inputEmail" class="sr-only">Email адреса</label>
    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email адреса" required="" autofocus="">
    <label for="inputPassword" class="sr-only">Пароль</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Пароль" required="">
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Запам'ятати мене
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Увійти</button>
</form>@endsection
