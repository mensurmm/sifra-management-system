<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(10);
        return view('staff.index', compact('users'));
    }

    public function create()
    {
        return view('staff.create');
    }

    public function store(Request $request)
        {
        $request->validate([
        'full_name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'phone' => 'nullable|string|max:255',
        'password' => 'required|min:6',
        'role' => 'required|in:admin,manager',
        'status' => 'nullable|in:active,inactive',
    ]);
    
        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status ?? 'active',
        ]);
        

        return redirect()->route('staff.index')->with('success', 'Staff member created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('staff.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($user->id)],
            'phone' => 'nullable|string|max:255',
            'password' => 'nullable|min:6',
            'role' => 'required|in:admin,manager',
            'status' => 'required|in:active,inactive',
        ]);

        $user->update([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
        ]);

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
            $user->save();
        }

        return redirect()->route('staff.index')->with('success', 'Staff member updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (auth()->id() === $user->id) {
            return back()->withErrors(['staff' => 'You cannot delete your own account from staff management.']);
        }

        $user->update(['status' => 'inactive']);
        $user->delete();

        return redirect()->route('staff.index')->with('success', 'Staff member deactivated successfully.');
    }
}
