<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => [
                'required',
                'min:8',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'confirmed',
                Rules\Password::defaults()->symbols()],
            'binusian_validation'=> 'required',
            'leader_name' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'whatsapp' => ['required', 'regex:/[0-9]/', 'min:9', 'unique:'.User::class],
            'line' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'github' => 'required|string|max:255',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required',
            'cv' => 'required|mimes:pdf,jpg,jpeg,png',
            'flazz_card' => 'mimes:pdf,jpg,jpeg,png',
            'id_card' => 'mimes:pdf,jpg,jpeg,png'
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'binusian_validation' => $request->binusian_validation,
            'leader_name' => $request->leader_name,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp,
            'line' => $request->line,
            'github' => $request->github,
            'birth_place' => $request->birth_place,
            'birth_date' => $request->birth_date,
            'cv' => $request->cv,
            'flazz_card' => $request->flazz_card,
            'id_card' => $request->id_card
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
