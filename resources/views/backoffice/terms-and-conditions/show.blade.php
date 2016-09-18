@extends('layouts.app')

@section('contentheader_title', trans('terms-and-conditions.section.title'))
@section('contentheader_description', trans('terms-and-conditions.section.description', compact('updated')))

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    {!! $body !!}
                </div>

                <div class="panel-footer">{{ $updated }}</div>
            </div>

            @can('edit terms-and-conditions')
                {!! Button::primary('test')->asLinkTo(route('backoffice.terms-and-conditions.edit'))->large() !!}
            @endcan
        </div>
    </div>
</div>
@endsection