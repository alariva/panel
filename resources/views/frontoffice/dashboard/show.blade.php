@extends('layouts.app')

@section('contentheader_title', trans('dashboard.section.title'))

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-4">

        @foreach($widgets as $widget)
            {!! $widget->render() !!}
        @endforeach

        </div>
    </div>
</div>
@endsection