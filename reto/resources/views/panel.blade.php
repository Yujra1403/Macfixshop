@extends('layouts.macfix')

@section('contenido')
    <section class="contacto-section">
        <div class="container">
            <h2>Agregar Producto a la Vitrina</h2>
            
            @if ($errors->any())
                <p class="error-mensaje">Revisa los datos. Faltan campos o la imagen no es válida.</p>
            @endif

            <form action="/productos" method="POST" enctype="multipart/form-data" class="formulario-contacto">
                @csrf
                <div class="campo">
                    <label for="nombre">Nombre del producto:</label>
                    <input type="text" id="nombre" name="nombre">
                </div>

                <div class="campo">
                    <label for="precio">Precio (Bs):</label>
                    <input type="number" id="precio" name="precio">
                </div>
                
                <div class="campo">
                    <label for="stock">Stock (Unidades):</label>
                    <input type="number" id="stock" name="stock">
                </div>

                <div class="campo">
                    <label for="marca">Marca:</label>
                    <select id="marca" name="marca">
                        <option value="ugreen">Ugreen</option>
                        <option value="anker">Anker</option>
                    </select>
                </div>

                <div class="campo">
                    <label for="imagen">Imagen del producto:</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                </div>

                <button type="submit">Guardar Producto</button>
            </form>
        </div>
    </section>
@endsection