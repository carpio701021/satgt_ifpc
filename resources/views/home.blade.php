@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in! <br />
                    <button class="btn btn-default">Llenar datos de factura</button>
                    <a href="{{ action('PlantillaFacturaController@index') }}" class="btn btn-default">Crear plantilla de factura</a>
                    <button class="btn btn-default">Hacer factura</button>
                    <button class="btn btn-default">Imprimir talonario</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
