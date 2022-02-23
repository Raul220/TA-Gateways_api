@extends("../layouts.plantilla")

@section("cabecera")

@section("contenido")

    <form method="post">
        <input type="text" name="nombre" placeholder="Nombre">

        <input type="submit" name="enviar" value="Enviar">
    </form>