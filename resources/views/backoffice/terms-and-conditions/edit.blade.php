@extends('layouts.app')

@section('contentheader_title', trans('terms-and-conditions.section.title'))
@section('contentheader_description', trans('terms-and-conditions.section.description', compact('updated')))

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            {!! Form::open(['method' => 'put', 'route' => ['backoffice.terms-and-conditions.update']]) !!}

            <div class="panel panel-default">

                <div class="panel-body">
                <textarea name="body">{!! $body !!}</textarea>

                </div>

            </div>

            @can('edit terms-and-conditions')
                {!! Button::primary(trans('btn.update'))
                            ->submit()
                            ->large()
                            ->block() !!}
            @endcan

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection