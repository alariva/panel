@extends('layouts.app')

@section('contentheader_title', trans('quotecalculator.section.title'))
@section('contentheader_description', trans('quotecalculator.section.description'))

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {!! Form::open(['method' => 'post', 'route' => ['frontoffice.quotecalculator.post'], 'class' => 'form-horizontal']) !!}

            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="form-group">
                    {!! Form::label('hours', 'Cantidad de horas a cotizar', ['class' => 'col-sm-4 control-label']) !!}
                    <div class="col-sm-8">
                        {!! Form::number('hours', '10', ['class' => 'form-control input-lg', 'placeholder' => '10', 'step' => 1, 'max' => 168, 'min' => 1]) !!}
                    </div>
                    </div>

                </div>

            </div>

            {!! Button::primary(trans('btn.submit'))
                        ->submit()
                        ->large()
                        ->block() !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection