<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Mahasiswa
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

            if ($user->mahasiswa == 1) {
                $selectedRole = 'mahasiswa';
            } else {
                $selectedRole = $this->getUserPrimaryRole($user);
            }

            // Simpan role ke session untuk request berikutnya
            session(['user_role' => $selectedRole]);
        }

        // Jika role yang dipilih bukan mahasiswa, redirect sesuai role
        if ($selectedRole !== 'mahasiswa') {
            return $this->redirectBasedOnRole($selectedRole);
        }

        return $next($request);
    }

    /**
     * Mendapatkan role utama pengguna jika bukan mahasiswa
     */
    private function getUserPrimaryRole($user)
    {
        if ($user->dekan == 1) {
            return 'dekan';
        }
        if ($user->kaprodi == 1) {
            return 'kaprodi';
        }
        if ($user->dosenwali == 1) {
            return 'dosenwali';
        }
        if ($user->akademik == 1) {
            return 'akademik';
        }

        // Jika tidak ada role lain, default ke 'mahasiswa'
        return 'mahasiswa';
    }

    /**
     * Redirect berdasarkan role yang dipilih atau default role
     */
    private function redirectBasedOnRole($role)
    {
        switch ($role) {
            case 'dekan':
                return redirect('dekan/dashboard');
            case 'kaprodi':
                return redirect('kaprodi/dashboard');
            case 'akademik':
                return redirect('akademik/dashboard');
            case 'dosenwali':
                return redirect('dosenwali/dashboard');
            default:
                return redirect('login')->with('error', 'Unauthorized access.');
        }
    }
}