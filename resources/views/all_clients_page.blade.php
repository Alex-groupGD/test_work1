@extends('yaled.pattern')


@section('title-block')
    Наши клиенты
@endsection

@section('content')

    <h1>Список клиентов</h1>
    @foreach($users as $user)


        <div class="row">
        <ul class="list-group">

            <li class="list-group-item">{{$user->family}} {{$user->name}} {{$user->name_father}} {{$user->telephone}} {{$user->avto_id}}
               {{-- @foreach($avtos as $avto)          {{$avto->marka}} {{$avto->model}} {{$avto->color}} {{$avto->gos_num}}  @endforeach--}}
                <form method="POST" action="{{route('users.destroy' , $user )  }}">
                    <a href="{{route('users.edit' , $user)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
                    <a href="{{route('users.show' , $user)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Мои машины</a>

                    @csrf()
                    @method('DELETE')

                    <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                </form>
            </li>
        </ul>
        </div>

    @endforeach
@endsection
