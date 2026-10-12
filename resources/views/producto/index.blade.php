@extends('layouts.app')

@section('content')

<div class="container">

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>PRECIO</th>
            <th>DESCRIPCION</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto )
        <tr>
            <td>{{ $producto -> ID }}</td>
            <td>{{ $producto -> nombre }}</td>
            <td>{{ $producto -> precio }}</td>
            <td>{{ $producto -> descripcion }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>

@endsection