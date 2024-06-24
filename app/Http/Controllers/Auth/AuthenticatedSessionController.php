<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    public function create(): View
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request): RedirectResponse
    {
        try {
            $credentials = $request->only('email', 'password');
            $remember = $request->boolean('remember');
            
            if (Auth::attempt($credentials, $remember)) {
                $request->session()->regenerate();

                $intendedUrl = $request->session()->pull('url.intended', route('convalidarCursos'));
                return redirect()->to($intendedUrl);
            }

            throw ValidationException::withMessages([
                'login' => 'Credenciales incorrectas. Por favor, inténtelo de nuevo.'
            ]);

        } catch (ValidationException $e) {
            // Handle the authentication failure
            return redirect()->route('login')->withErrors([
                'login' => 'Credenciales incorrectas. Por favor, inténtelo de nuevo.'
            ]);
        } catch (\Exception $e) {
            // Handle other exceptions
            return redirect()->route('login')->withErrors([
                'login' => 'Ocurrió un error. Por favor, inténtelo de nuevo.'
            ]);
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}