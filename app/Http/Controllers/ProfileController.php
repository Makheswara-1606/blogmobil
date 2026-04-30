<?php
// app/Http\Controllers/ProfileController.php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile;
        
        return view('halamanProfile', compact('user', 'profile'));
    }

    public function update(Request $request): RedirectResponse
    {
        $user = Auth::user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'bio' => 'nullable|string|max:500',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255'
        ]);

        try {
            // Update user data
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);

            // Handle photo upload
            if ($request->hasFile('profile_photo')) {
                // Delete old photo if exists
                if ($user->profile_photo) {
                    Storage::disk('public')->delete($user->profile_photo);
                }
                
                $photoPath = $request->file('profile_photo')->store('profiles', 'public');
                $user->update(['profile_photo' => $photoPath]);
            }

            // Update atau create profile data tambahan
            $profileData = [
                'bio' => $request->bio,
                'phone' => $request->phone,
                'address' => $request->address,
            ];

            if ($user->profile) {
                $user->profile->update($profileData);
            } else {
                $user->profile()->create($profileData);
            }

            return redirect()->route('halamanProfile')
                ->with('success', 'Profile berhasil diperbarui!');
                
        } catch (\Exception $e) {
            return redirect()->route('halamanProfile')
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function deletePhoto(): RedirectResponse
    {
        $user = Auth::user();
        
        if ($user->profile_photo) {
            Storage::disk('public')->delete($user->profile_photo);
            $user->update(['profile_photo' => null]);
            
            return redirect()->route('halamanProfile')
                ->with('success', 'Foto profil berhasil dihapus!');
        }
        
        return redirect()->route('halamanProfile')
            ->with('error', 'Tidak ada foto profil untuk dihapus!');
    }
}