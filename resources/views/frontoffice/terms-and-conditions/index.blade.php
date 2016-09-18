@extends('layouts.app')

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
        </div>
    </div>
</div>
@endsection