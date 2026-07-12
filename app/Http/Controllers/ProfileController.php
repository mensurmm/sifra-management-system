<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /** Display the clean profile overview card screen */
    public function show(Request $request): View
    {
        return view('profile.show', ['user' => $request->user()]);
    }

    /** Display the profile updates form workspace container */
    public function edit(Request $request): View
    {
        return view('profile.edit', ['user' => $request->user()]);
    }

    /** Force-update account information columns directly inside database */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());

        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /** Display password modification view layer */
    public function passwordEdit(Request $request): View
    {
        return view('profile.password', ['user' => $request->user()]);
    }

    /** Display custom system alert notifications preference channels */
    public function notificationsEdit(Request $request): View
    {
        return view('profile.notifications', ['user' => $request->user()]);
    }

    /** Save notifications settings properties */
    public function notificationsUpdate(Request $request): RedirectResponse
    {
        // Add database column save assignments here if tracking alerts preferences
        return Redirect::route('profile.notifications.edit')->with('status', 'notifications-updated');
    }

    /** Destructively drop user account records from registration engine */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
