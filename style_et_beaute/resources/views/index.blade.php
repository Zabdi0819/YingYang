@extends('layouts.master')
@section('Inicio', 'Index')
@section('contenido')
<section>
    <div class="inicio">
        <div class="row">
            <div class="col-sm-3 col-md-6 col-lg-6">
                <img class="obj" src="images/qs4.jpg">
            </div>	
            <div class="col-sm-12 col-md-12 col-lg-6">
                <h1> Nuestro Objetivo </h1>
                <p> 
                    <br> Aumento de la demanda y personalización de la oferta a terceros de productos de moda y belleza para el apoyo de la economía actual de las mujeres emprendedoras locales, mediante la publicidad de sus productos de manera gratuita.
                </p>
            </div>
        </div>
    </div>
    <div class="texto">
        <h2>¿Quiéres ser parte de este proyecto? <br></h2>
        <span>¡Es muy fácil!</span><BR> <BR>
        <p> Realiza el registro para darte de alta como vendedora, posteriormente el equipo de Style et beauté
            se encargará de verificar la autenticidad de tu negocio y se pondrá en contacto contigo.
            <br> 
            Puedes visitar nuestro sitio oficial y conocer más sobre nosotros. <br>
            <A HREF="https://styleetbeaute2.wixsite.com/inicio"> Sitio oficial de Style et Beauté </A>
        </p>
        </div>
        <div class="inicio2">
            <h1 id="eq"><A HREF="productos"> Conoce la variedad de nuestros productos </A></h1>
            <div class="row">
                <div class="col-sm-3 col-md-6 col-lg-6">
                    <img  src="images/p4.jpeg"> <br>
                </div>	
                <div class="col-sm-9 col-md-6 col-lg-6">
                    <img src="images/p5.jpeg"> <br>
                </div>
            </div>
        </div>
</section>
@endsection
