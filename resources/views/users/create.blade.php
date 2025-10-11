<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Celke</title>
</head>
<body>
	<h1>Cadastrar Usuario</h1>

	@if (session('success'))
		<p style="color: #086;">
			{{ session('success') }}
		</p>
	@endif

	@if (session('error'))
		<p style="color: #f00;">
			{{ session('error') }}
		</p>
	@endif

	<form action="{{ route('user.store') }}" method="POST">
		@csrf 

		<label for="name">Nome: </label>
		<input type="text" name="name" id="name" placeholder="Nome completo do usuario..." value="{{ old('name') }}" required><br><br>

		<label for="email">E-mail: </label>
		<input type="email" name="email" id="email" placeholder="Seu melhor email..." value="{{ old('email') }}" require><br><br>

		<label for="password">Senha: </label>
		<input type="password" name="senha" id="senha" placeholder="Entre com sua senha..." value="{{ old('senha') }}" require><br><br>

		<button type="submit">Cadastrar</button>
	</form>
</body>
</html>