@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="content-title">
            <h1 class="page-title">Cadastrar Usuario</h1>
            <a href="#" class="btn-primary">Listar</a>
        </div>        

		<x-alert />

        <form action="{{ route('user.store') }}" method="POST" class="form-container">
            @csrf

            <div class="mb-4">
                <label for="name" class="form-label">Nome: </label>
                <input type="text" name="name" id="name" placeholder="Nome completo do usuario..."
                    value="{{ old('name') }}" class="form-input" required>
            </div>

            <div class="mb-4">
                <label for="email" class="form-label">E-mail: </label>
                <input type="email" name="email" id="email" placeholder="Seu melhor email..."
                    value="{{ old('email') }}" class="form-input" require>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha: </label>
                <input type="password" name="password" id="password" placeholder="Entre com sua senha..."
                    value="{{ old('password') }}" class="form-input" require>
            </div>

            <button type="submit" class="btn-success">Cadastrar</button>
        </form>
    </div>
@endsection
