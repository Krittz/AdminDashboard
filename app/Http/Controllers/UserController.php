<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.signup');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return redirect('login')->with('success', 'Usuário criado com sucesso!');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($validatedData)) {
            return redirect('/home');
        }

        return redirect()->back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    public function signup(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed', // O campo password_confirmation é validado automaticamente
        ]);

        try {
            // Criação do usuário
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['password']),
            ]);

            // Autentica o usuário após o cadastro
            Auth::login($user);

            // Redireciona o usuário para a home
            return redirect('/home')->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            // Em caso de erro, redireciona de volta com uma mensagem de erro
            return redirect()->back()->withErrors(['error' => 'Erro ao cadastrar usuário. Por favor, tente novamente.']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
