@extends('layouts.app')

@section('content')

    <h1>Suma de 2 numeros</h1>
    <form action="/suma" method="POST">
        @csrf
        <label>Ingrese el 1º numero:</label>
        <input name="num1" id="num1" required>
        <br><br>
        <label>Ingrese el 2º numero:</label>
        <input name="num2" id="num2" required>
        <br><br>
        <button type="submit">Sumar</button>
    </form>
    @if(@isset($res))

    <h3>La suma de estos numeros es: {{ $res }}</h3>
        
    @endif

@endsection