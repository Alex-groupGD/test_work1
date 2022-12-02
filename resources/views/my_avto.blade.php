@extends('yaled.pattern')


@section('title-block')
    Машины {{$user->family}}
@endsection

@section('content')

    <h1>Машины {{$user->family}}</h1>

<<<<<<< HEAD
    @foreach($avtos as $avto=>$value)
=======
    @foreach($avtos as $avto)
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
        <div class="row">
            <ul class="list-group">

                <li class="list-group-item">
<<<<<<< HEAD
                             {{$value->marka}} {{$value->model}} {{$value->color}} {{$value->gos_num}}



                    <form method="POST" action="{{route('avtos.destroy' ,  $value->id )  }}">
                        @csrf()
                        <a href="{{route('ss' , $value->id)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
=======
                             {{$avto->marka}} {{$avto->model}} {{$avto->color}} {{$avto->gos_num}}



                    <form method="POST" action="{{route('avtos.destroy' , $avto )  }}">
                        @csrf()
                        <a href="{{route('ss' , $avto)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8


                        @method('DELETE')
                        <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                    </form>
                </li>
            </ul>
        </div>
    @endforeach
    <a href="{{route('avtos.create',$user) }}" class="btn  btn-secondary fw-bold border-white bg-dark m-5   ">Добавить автомобиль</a>
@endsection
