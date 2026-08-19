@extends('layouts.base')
@section('contenido')
    <p>En la ferreteria el tornillo encuentras todo tipo de herramientas para el uso diario</p>
    <p><strong>Hay {{ count($herramientas) }} herramientas en el inventario.</strong></p>

    <ul>
        @foreach($herramientas as $herramienta)
            <li>{{ $herramienta->nombre }} - Bs {{ $herramienta->precio }}</li>
        @endforeach
    </ul>
    <p>Inventario atendido por Samuel David Yujra Nina</p>

    <br>
    <a href="/herramientas/nuevo">Registrar nueva herramienta</a>
@endsection