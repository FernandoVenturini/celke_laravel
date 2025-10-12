@extends('layouts.admin')

@section('content')
    <h1>Bem-vindo a Celke!</h1>

    <a href="{{ route('user.create') }}">Cadastrar</a>
@endsection
