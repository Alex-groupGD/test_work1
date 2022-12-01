@extends('yaled.pattern')


@section('title-block')
    Добавление нового авто

@endsection
@section('title')
    Добавить новый автомобиль
@endsection

@section('content')

    <form method="POST"
    @if(isset($avto))
        action="{{route('avtos.update',$avto , $avto)}}" >
        @csrf
    @else
        action="{{route('avtos.store', $user) }}" >
        @csrf
    @endif



    @isset($avto)
        @method('put')
    @endisset




        <div class="container">
            <div class="row">
                {{--<--create avto in table 1:m-->--}}

                <div class="col-sm">

                    <div class="form-group ">
                        <label for="formGroupExampleInput">Марка Авто</label>
                        <input type="text" name="marka"
                               value="{{old('marka',isset($avto) ? $avto->marka : null)}}"
                               class="form-control " id="formGroupExampleInput" placeholder="Введите Марку Авто">
                        @error('marka')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Модель</label>
                        <input type="text" name="model"
                               value="{{old('model',isset($avto) ? $avto->model : null)}}"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Модель авто">
                        @error('model')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Цвет автомобиля</label>
                        <input type="text" name="color"
                               value="{{old('color',isset($avto) ? $avto->color : null)}}"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Цвет автомобиля">
                        @error('color')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Гос. номер машины</label>
                        <input type="text" name="gos_num"
                               value="{{old('gos_num',isset($avto) ? $avto->gos_num : null)}}"
                               class="form-control" id="formGroupExampleInput2" placeholder="Введите Гос. номер машины">
                        @error('gos_num')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>
            </div>
        </div>

        <div class="form-group m-2">
            <button class="btn btn-lg btn-secondary fw-bold border-white bg-dark" type="submit">{{isset($avto) ? 'Сохранить'  : 'Добавить' }}</button>
            <a href="{{ url()->previous() }}" class="btn btn-lg btn-secondary fw-bold border-white bg-dark">назад</a>
            </p>
        </div>



    </form>



@endsection
