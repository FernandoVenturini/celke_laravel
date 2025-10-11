<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
	// Carregar o formulario cadastrar novo usuario
	public function create()
	{
		return view('users.create');
	}

	public function store(Request $request)
	{
		// Verificar se email ja existe:		
		try {
			//dd($request);
			User::create([
				'name' => $request->name,
				'email' => $request->email,
				'password' => Hash::make($request->password)
			]);
			return redirect()->route('user.create')->with('success', 'Usuario cadastrado com sucesso!');

		} catch (Exception $e) {
			return back()->withInput()->with('error', 'Usuario nao cadastrado!');
		}
	}
}
