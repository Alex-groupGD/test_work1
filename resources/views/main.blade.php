@extends('yaled.pattern')


@section('title-block')
    Главная страница
@endsection


@section('content')

    <main class="px-3">
        <h1>Стань участником парковки.</h1>
        <p class="lead">Позволь нам выполнять отчет по нахождению автомобиля. Мы предлагаем,неограниченное количесвто мест, а также безопасность.</p>
        <p class="lead">
            <a href="{{route('users.create')}}" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">Стать участником</a>
        </p>
    </main>

@endsection


