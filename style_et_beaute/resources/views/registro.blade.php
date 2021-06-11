@extends('layouts.master')
@section('Registro', 'registro')
@section('contenido')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card-body">
                    <form id="frmRegistro">
                        @csrf 
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="apellidos">Apellidos</label>
                                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese apellidos" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre completo" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="text" name="correo" id="correo" placeholder="Ingrese email" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="usuario">Usuario de Instagram</label>
                                    <input type="text" name="usuario_ig" id="usuario_ig" placeholder="Ingrese su usuario de Instagram" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" name="telefono" id="telefono" placeholder="Ingrese número de contacto" class="form-control">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success btn-block">REGISTRARSE</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        $(function (){
            enviarRegistro();
        });

        var enviarRegistro = function (){
            $("#frmRegistro").on("submit",function (e){
                e.preventDefault();

                $.ajax({
                    url:'{{route('registro.verificar')}}',
                    method: 'POST',
                    dataType:'json',
                    data: new FormData($("#frmRegistro")[0]),
                    contentType: false,
                    processData: false,
                    beforeSend:function (){
                        console.log("Enviando");
                    },
                    success:function (data){
                        console.log(data);
                    },
                    error:function (data){
                        console.log(data);
                    },
                    complete:function(){
                        console.log("Completado");
                    }
                });
            });
        }
    </script>
@endsection