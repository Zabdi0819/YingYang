@extends('layouts.master')
@section('Productos', 'Productos')
@section('contenido')
    <div class="productos">
        <div class="ron">
            <div class="col-md-12">
                <h1>LISTA DE PRODUCTOS</h1>
                @foreach($productosLista as $productos)
                    {{$productos ->id}} : 
                    {{$productos ->nombre}} , 
                    {{$productos ->descripcion}} , $
                    {{$productos ->precio}} , 
                    {{$productos ->existencias}} en existencia <br> <br>
                @endforeach
            </div>
        </div>
    </div>
@endsection