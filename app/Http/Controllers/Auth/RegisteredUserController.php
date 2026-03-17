<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserFeed;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
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
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        date_default_timezone_set("Asia/Kolkata");
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'college'=> ['required'],
            'department'=> ['required', 'string', 'max:255'],
            'batch'=> ['required'],
            'current_profession'=> ['required', 'string', 'max:255'],
            'current_location'=> ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'college' => $request->college,
            'department' => $request->department,
            'batch' => $request->batch,
            'current_profession' => $request->current_profession,
            'current_location' => $request->current_location,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        $feed = UserFeed::create([
            'user_id' =>Auth::user()->id,
            'feed_category' => 'new_user',
            'the_feed' => "New User Joined",
            'feed_id' => $user->id   
        ]);

        return redirect(route('dashboard', absolute: false));
    }
}
