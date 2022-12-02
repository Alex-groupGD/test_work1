
@extends('yaled.pattern')


@section('title-block')
    Парковка
@endsection


@section('content')


    <form method="post" action="{{route('avto')}}">

        @csrf

            <div class="col-lg-3 m-5">
                <h3>Выберите автомобиль</h3>
                <hr>
                <div class="form-group">
                    <label>Владелец</label>
                    <select class="form-control input-sm" name="category_id">
                        <option value="">--select--</option>
<<<<<<< HEAD
                        @foreach ($users as $row=>$value)
                            <option value="{{$value->id}}">{{$value->family}}</option>
=======
                        @foreach ($users as $row)
                            <option value="{{$row->id}}">{{$row->family}}</option>
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8
                        @endforeach
                    </select>
                </div>

                <div class="form-group" style="position:relative">
                    <label>Машины</label>
                    <select class="form-control input-sm" name="subcategory_id"></select>
                </div>
                <button class="btn btn-lg btn-secondary fw-bold border-white bg-dark m-3" type="submit">Поставить авто на парковку </button>
            </div>




    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

        @csrf
    <script>
        $(function () {
            var loader = $('#loader'),
                category = $('select[name="category_id"]'),
                subcategory = $('select[name="subcategory_id"]');

            loader.hide();
            subcategory.attr('disabled','disabled')

            subcategory.change(function(){
                var id = $(this).val();
                if(!id){
                    subcategory.attr('disabled','disabled')
                }
            })

            category.change(function() {
                var id= $(this).val();
                if(id){
                    loader.show();
                    subcategory.attr('disabled','disabled')

                    $.get('{{url('/dropdown-data?cat_id=')}}'+id)
                        .success(function(data){
                            var s='<option value="">---select--</option>';
                            data.forEach(function(row){
                                s +='<option value="'+row.id+'">'+row.marka+"   "+row.gos_num+'</option>'
                            })

                            subcategory.removeAttr('disabled')
                            subcategory.html(s);
                            loader.hide();



                        })
                }

            })
        })
    </script>






    </form>
    <h1>Парковка</h1>
<<<<<<< HEAD
    <h1>  @foreach($avto as $avt=>$value)
        <ul class="list-group m-3 ">
        <li class="list-group-item">
              {{$value->marka}} {{$value->model}} {{$value->color}} {{$value->gos_num}}
               <a href="{{route('avto_out' , $value->id)}}" class="btn  btn-secondary fw-bold border-white bg-dark">Покинуть парковку</a>
=======
    <h1>  @foreach($avto as $avt)
        <ul class="list-group m-3 ">
        <li class="list-group-item">
              {{$avt->marka}} {{$avt->model}} {{$avt->color}} {{$avt->gos_num}}
               <a href="{{route('avto_out' , compact('avt'))}}" class="btn  btn-secondary fw-bold border-white bg-dark">Покинуть на парковку</a>
>>>>>>> 01df6951b265b392c8c6c60d6087920a5f3999b8

        </li>
    </ul>
   @endforeach </h1>

@endsection


