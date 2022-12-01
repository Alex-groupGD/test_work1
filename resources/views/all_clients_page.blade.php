@extends('yaled.pattern')


@section('title-block')
    Наши клиенты
@endsection

@section('content')



    <h1>Список клиентов</h1>
    @foreach($users as $user=>$value)


        <div class="row">
        <ul class="list-group">

            <li class="list-group-item">{{$value->family}} {{$value->name}} {{$value->name_father}} {{$value->telephone}}
                <form method="POST" action="{{route('users.destroy' , $value->id )  }}">
                    <a href="{{route('users.edit' , $value->id )}}" class="btn  btn-secondary fw-bold border-white bg-dark">Изменить</a>
                    <a href="{{route('users.show' , $value->id)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Мои машины</a>

                    @csrf()
                    @method('DELETE')

                    <button type="submit" class="btn  btn-secondary fw-bold border-white bg-dark">Удалить</button>

                </form>
            </li>
        </ul>
        </div>

    @endforeach
@endsection
