<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.admin.logout');
    }
    public function logout()
    {
        Auth::Logout();
        return redirect(Route('welcome'));
    }
}
