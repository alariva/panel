@extends('layouts.app')

@section('contentheader_title', trans('dashboard.section.title'))

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-md-4">

            {!! Smallbox::named('Pagos')
                        ->primary()
                        ->body('Accedé a tus facturas y cotizaciones en alariva.com')
                        ->linkTo('https://payments.alariva.com/client/dashboard/maTT2AbXaqpp2PFoNeCnh3q7nSsVXdjS')
                        ->linkName('Facturas y Cotizaciones')
                        ->withIcon('fa-money') !!}

            {!! Smallbox::named('Turnos')
                        ->primary()
                        ->body('Gestioná tus turnos en alariva.com')
                        ->linkTo('https://timegrid.io/alariva')
                        ->linkName('Turnos')
                        ->withIcon('fa-calendar') !!}

        </div>
    </div>
</div>
@endsection