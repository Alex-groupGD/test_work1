@extends('yaled.pattern')


@section('title-block')
    Наши клиенты
@endsection

@section('content')

<<<<<<< HEAD


    <h1>Список клиентов</h1>
    @foreach($users as $user=>$value)
=======
    <h1>Список клиентов</h1>
    @foreach($users as $user)
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8


        <div class="row">
        <ul class="list-group">

<<<<<<< HEAD
            <li class="list-group-item">{{$value->family}} {{$value->name}} {{$value->name_father}} {{$value->telephone}}
                <form method="POST" action="{{route('users.destroy' , $value->id )  }}">
                    <a href="{{route('users.edit' , $value->id )}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
                    <a href="{{route('users.show' , $value->id)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Мои машины</a>
=======
            <li class="list-group-item">{{$user->family}} {{$user->name}} {{$user->name_father}} {{$user->telephone}} {{$user->avto_id}}
               {{-- @foreach($avtos as $avto)          {{$avto->marka}} {{$avto->model}} {{$avto->color}} {{$avto->gos_num}}  @endforeach--}}
                <form method="POST" action="{{route('users.destroy' , $user )  }}">
                    <a href="{{route('users.edit' , $user)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
                    <a href="{{route('users.show' , $user)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Мои машины</a>
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8

                    @csrf()
                    @method('DELETE')

                    <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                </form>
            </li>
        </ul>
        </div>

    @endforeach
@endsection
