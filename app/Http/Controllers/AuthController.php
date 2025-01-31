<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assurez-vous d'importer le modèle User

class AuthController extends Controller
{

    public function index()
    {
        
        return view('welcome');
    }

    
    // Afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Traiter les données soumises par le formulaire d'inscription
    public function register(Request $request)
    {
        // Validation des données
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'ident' => 'required|string|max:255|unique:users',
            'solde' => 'required|string|max:250', // Validation du champ solde
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        // Créer un nouvel utilisateur
        $user = new User;
        $user->name = $request->name;
        $user->ident = $request->ident;
        $user->solde = $request->solde; // Enregistrer le solde
        $user->password = bcrypt($request->password);
        $user->save();
    
        // Connecter l'utilisateur
        Auth::login($user);
    
        // Rediriger l'utilisateur vers la page d'accueil ou toute autre page
        return redirect('/');
    }
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function edit()
    {
        return view('settings');
    }

    public function my()
    {
        return view('my-cards');
    }
    // Traiter les données soumises par le formulaire de connexion
    public function login(Request $request)
    {
        // Validation des données
        $credentials = $request->only('ident', 'password');

        if (Auth::attempt($credentials)) {
            // Authentification réussie, rediriger l'utilisateur vers la page d'accueil ou toute autre page
            return redirect()->intended('/accueil');
        } else {
            // Authentification échouée, rediriger l'utilisateur vers le formulaire de connexion avec un message d'erreur
            return redirect()->back()->withInput()->withErrors(['ident' => 'Les informations d\'identification fournies ne correspondent pas à nos enregistrements.']);
        }
        
    }

    // Déconnecter l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect('/connexion');
    }
}
