<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Dosenwali
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $selectedRole = session('user_role');

        // Jika role belum ada di session, cek dari user yang login
        if (!$selectedRole) {
            $user = Auth::user();

            if ($user->dosenwali == 1) {
                $selectedRole = 'dosenwali';
            } else {
                $selectedRole = $this->getUserPrimaryRole($user);
            }
        }

        // Jika role yang dipilih bukan dosenwali, redirect sesuai role lain
        if ($selectedRole !== 'dosenwali') {
            return $this->redirectBasedOnRole($selectedRole);
        }

        return $next($request);
    }

    private function getUserPrimaryRole($user)
    {
        if ($user->dekan == 1) {
            return 'dekan';
        }
        if ($user->kaprodi == 1) {
            return 'kaprodi';
        }
        if ($user->akademik == 1) {
            return 'akademik';
        }
        if ($user->mahasiswa == 1) {
            return 'mahasiswa';
        }

        return 'dosenwali';
    }

    private function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'dekan':
                return redirect('dekan/dashboard');
            case 'kaprodi':
                return redirect('kaprodi/dashboard');
            case 'akademik':
                return redirect('akademik/dashboard');
            case 'mahasiswa':
                return redirect('user/dashboard');
            default:
                return redirect('login')->with('error', 'Unauthorized access.');
        }
    }
}