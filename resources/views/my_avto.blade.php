@extends('yaled.pattern')


@section('title-block')
    Машины {{$user->family}}
@endsection

@section('content')

    <h1>Машины {{$user->family}}</h1>

    @foreach($avtos as $avto)
        <div class="row">
            <ul class="list-group">

                <li class="list-group-item">
                             {{$avto->marka}} {{$avto->model}} {{$avto->color}} {{$avto->gos_num}}



                    <form method="POST" action="{{route('avtos.destroy' , $avto )  }}">
                        @csrf()
                        <a href="{{route('ss' , $avto)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>


                        @method('DELETE')
                        <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                    </form>
                </li>
            </ul>
        </div>
    @endforeach
    <a href="{{route('avtos.create',$user) }}" class="btn  btn-secondary fw-bold border-white bg-dark m-5   ">Добавить автомобиль</a>
@endsection
