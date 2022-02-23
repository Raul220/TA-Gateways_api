@extends("../layouts.plantilla")

@section("cabecera")
Editar Producto
@endsection

@section("contenido")


{!! Form::model($producto, ['method'=>'POST', 'action'=>['ProductosController@update', $producto->id]]) !!}}
        <table>
            <tr>
                <td>
                    Nombre:
                </td>
                <td>
                    <input type="text" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}">
                </td>
            </tr>
            <tr>
                <td>
                    Seccion:
                </td>
                <td>
                    <input type="text" name="seccion" placeholder="Seccion" value="{{$producto->seccion}}">
                </td>
            </tr>
            <tr>
                <td>
                    Precio:
                </td>
                <td>
                    <input type="number" name="precio" placeholder="Precio" value="{{$producto->precio}}">
                </td>
            </tr>
            <tr>
                <td>
                    Fecha:
                </td>
                <td>
                    <input type="text" name="fecha" placeholder="Fecha" value="{{$producto->fecha}}">
                </td>
            </tr>
            <tr>
                <td>
                    Pais:
                </td>
                <td>
                    <input type="text" name="pais" placeholder="Pais" value="{{$producto->pais}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="enviar" value="Enviar">
                </td>
                <td>
                    <input type="reset" name="borrar" value="Borrar">
                </td>
            </tr>
        </table>
{!! Form::close() !!}

{!! Form::open(['method'=>'DELETE', 'action'=>['ProductosController@destroy', $producto->id]]) !!}}
{{csrf_field()}}
<input type="hidden" name="_method" value="DELETE">
<input type="submit" value="Eliminar">
{!! Form::close() !!}
@endsection

@section("pie")

@endsection