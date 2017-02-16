@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plantilla de factura</div>

                <div class="panel-body">
                    
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="tam" class="col-sm-2 control-label">Tamaño:</label>
                            <div class="col-sm-10 btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Cuarto de carta</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Media carta</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default">Carta</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Estilo:</label>
                            <div class="col-sm-10">asdf</div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Fuente:</label>
                            <div class="col-sm-10">asdf</div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Logotipo:</label>
                            <div class="col-sm-10">asdef</div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Marca de agua:</label>
                            <div class="col-sm-10"></div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Datos que contendrá:</label>
                            <div class="col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Nombre completo
                                    </label>
                                </div>
                                    <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Nit
                                    </label>
                                </div>
                                    <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Dirección
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="col-sm-offset-2 col-sm-8 btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar plantilla</button>
                        </div>
                        
                        <br />



                        
                    </form>
                     
                     
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
