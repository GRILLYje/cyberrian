<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class RBCAController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        $roles = Role::all();
        return view('pages.RBCA', compact('users', 'roles'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate(['role' => 'required|string|exists:roles,name']);
        $user->syncRoles($request->role);
        return back()->with('success', 'User role updated successfully.');
    }

    public function toggleBan(User $user)
    {
        if ($user->isBanned()) {
            $user->unban();
            $message = 'User unbanned successfully.';
        } else {
            $user->ban();
            $message = 'User banned successfully.';
        }
        
        return back()->with('success', $message);
    }

    public function toggleLock(User $user)
    {
        if ($user->isLocked()) {
            $user->unlock();
            $message = 'User unlocked successfully.';
        } else {
            $user->lock();
            $message = 'User locked successfully.';
        }
        
        return back()->with('success', $message);
    }

    public function timeout(User $user)
    {
        if ($user->isTimedOut()) {
            $user->clearTimeout();
            $message = 'User timeout cleared successfully.';
        } else {
            $user->setTimeout('1 day'); // Set timeout for 1 day
            $message = 'User timeout set for 1 day.';
        }
        
        return back()->with('success', $message);
    }
}
