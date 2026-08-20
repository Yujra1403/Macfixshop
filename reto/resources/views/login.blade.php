@extends('layouts.macfix')
@section('contenido')
    <div class="contacto-section">
        <h2>Ingreso al Sistema</h2>
        @if (session('error'))
            <p style="color: red;">{{ session('error') }}</p>
        @endif
        <form action="/login" method="POST" class="formulario-contacto">
            @csrf
            <label>Correo:</label>
            <input type="email" name="email" required>
            <label>Contraseña:</label>
            <input type="password" name="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>
@endsection