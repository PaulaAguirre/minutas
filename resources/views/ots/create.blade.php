@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Orden de Trabajo</h3>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

    {!!Form::open(array('url'=>'ots','method'=>'POST','autocomplete'=>'off'))!!}
    {{Form::token()}}

    <div class="row text-uppercase">

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label>Código</label>
                {{--<select name="codigo" class="form-control">--}}
                    {{--<option value="{{'negro'}},{{'2'}}">negro</option>--}}
                    {{--<option value="">blanco</option>--}}
                {{--</select>--}}
                <input type="text" name="codigo" required value="{{old ('codigo')}}" class="form-control text-uppercase" placeholder="código de la orden de trabajo">
            </div>
        </div>

        <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
            <div class="form-group">
                <label for="obra">nombre</label>
                <input type="text" name="nombre" required value="{{old ('nombre')}}" class="form-control text-uppercase" placeholder="nombre de la obra">
            </div>
        </div>





        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12" id="guardar">
            <div class="form-group">
                <input name="_token" value="{{csrf_token()}}" type="hidden">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
        </div>
    </div>
    {!!Form::close()!!}

@endsection