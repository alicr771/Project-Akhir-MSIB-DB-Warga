<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{

    //MANAJEMEN PENGGUNA
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required', 'string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'integer', 'in:0,1'],
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'remember_token' => Str::random(60),
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    public function show(User $user)
    {
        return view('admin.user.detail', compact('user'));
    }

    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'no_hp' => ['required', 'string', 'max:15'],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'integer', 'in:0,1'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
    
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'role' => $request->role,

        ];
    
        if (!is_null($request->password)) {
            $userData['password'] = Hash::make($request->password);
        }
    
        $user->update($userData);
    
        return redirect()->route('user.index')->with('success', 'User berhasil diperbarui');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User berhasil dihapus');
    }



    //PROFILE
    public function profile()
    {
        $user = Auth::user();

        if ($user->role == 1) {
            return view('admin.profile.index', compact('user'));
        } elseif ($user->role == 0) {
            return view('user.profile.index', compact('user'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function editProfile()
    {
        $user = Auth::user();

        if ($user->role == 1) {
            return view('admin.profile.edit', compact('user'));
        } elseif ($user->role == 0) {
            return view('user.profile.edit', compact('user'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,' . $user->id],
            'password' => ['nullable', 'string', 'min:8', 'confirmed'],
            'no_hp' => ['nullable', 'string', 'max:15'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ];

        if ($request->password) {
            $userData['password'] = Hash::make($request->password);
        }

        $user->update($userData);

        return redirect()->route('profile')->with('success', 'Profile berhasil diperbarui');
    }

    public function editPassword()
    {
        $user = Auth::user();

        if ($user->role == 1) {
            return view('admin.profile.edit-password', compact('user'));
        } elseif ($user->role == 0) {
            return view('user.profile.edit-password', compact('user'));
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password berhasil diperbarui');
    }

    public function deleteAccount(Request $request)
    {
        $user = $request->user();
        Log::info('Attempting to delete user: ' . $user->id);
        try {
            $user->delete();
            Log::info('User deleted successfully: ' . $user->id);
        } catch (\Exception $e) {
            Log::error('Failed to delete user: ' . $user->id . ' Error: ' . $e->getMessage());
            return redirect()->route('profile')->with('error', 'Gagal menghapus user');
        }
        return redirect()->route('login')->with('success', 'User berhasil dihapus');
    }

}
