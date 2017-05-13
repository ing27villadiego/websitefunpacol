@extends('layout.master')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Registrar Usuario</h3>
                </div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'register', 'method'=>'POST', 'role' => 'form',  'autocomplete'=>'off']) !!}

                    {{ Form::token() }}

                        <div class="form-group">
                            <div class="input-group col-md-12">
                                {!! Form::select('city_id',$cities , null, ['class'=>'chosen form-control', 'placeholder'=>'Seleccione una Ciudad...']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user-circle-o"></i></span>
                                {!! Form::text('first_name',null, ['class'=>'form-control', 'placeholder'=>'Nombres']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-user-circle-o"></i></span>
                                {!! Form::text('last_name',null, ['class'=>'form-control', 'placeholder'=>'Apellidos']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-envelope"></i></span>
                                {!! Form::email('email', null,['class'=>'form-control', 'placeholder'=>'Ejemplo@ejemplo.com']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"> <i class="fa fa-lock"></i></span>
                                {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success pull-right" value="Registrar">
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop