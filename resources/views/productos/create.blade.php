@extends("../layouts.plantilla")

@section("cabecera")
    INSERTAR REGISTROS
@endsection

@section("contenido")

    {{--    <form method="post" action="{{url('productos')}}">--}}
    {!! Form::open(['url' => '/productos', 'method'=> 'post']) !!}
    <table>
        <tr>
            <td>
                {!! Form::label('nombre', 'Nombre'); !!}
            </td>
            <td>
{{--                <input type="text" name="nombre" placeholder="Nombre">--}}
                {!! Form::text('nombre'); !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('seccion', 'Seccion'); !!}
            </td>
            <td>
{{--                <input type="text" name="seccion" placeholder="Seccion">--}}
                {!! Form::text('seccion'); !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('precio', 'Precio'); !!}
            </td>
            <td>
{{--                <input type="number" name="precio" placeholder="Precio">--}}
                {!! Form::number('precio', 'precio') !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('fecha', 'Fecha'); !!}
            </td>
            <td>
{{--                <input type="text" name="fecha" placeholder="Fecha">--}}
                {!! Form::date('fecha', \Carbon\Carbon::now()); !!}
            </td>
        </tr>
        <tr>
            <td>
                {!! Form::label('pais', 'Pais'); !!}
            </td>
            <td>
{{--                <input type="text" name="pais" placeholder="Pais">--}}
                {!! Form::text('pais'); !!}
                {{csrf_field()}}
            </td>
        </tr>
        <tr>
            <td>
{{--                <input type="submit" name="enviar" value="Enviar">--}}
                {!! Form::submit('Enviar'); !!}
            </td>
            <td>
{{--                <input type="reset" name="borrar" value="Borrar">--}}
                {!! Form::reset('Borrar') !!}
            </td>
        </tr>
    </table>
    {!! Form::close() !!}
    {{--    </form>--}}
@endsection

@section("pie")

@endsection