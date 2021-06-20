<?php

namespace App\Http\Livewire\Pages;

use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $email;
    public $lama;
    public $baru;
    public $konfirmasi;
    public $err;

    public function mount()
    {
        $this->email = Auth::user()->email;
    }

    public function render()
    {
        $user = Member::where('id_user', '=', Auth::user()->id)->get();
        return view('livewire.pages.profile', compact('user'));
    }

    public function simpan()
    {
        $user = User::find(Auth::user()->id);
        if ($this->lama) {
            if (password_verify($this->lama, Auth::user()->password)) {
                if ($this->baru === $this->konfirmasi) {
                    $user->password = password_hash($this->baru, PASSWORD_DEFAULT);
                }else{
                    return $this->err = "Password Tidak Sama";
                }
            }else{
                return $this->err = "Password Salah";
            }
        }
        $user->email = $this->email;
        $user->save();
        $this->reset();
        return redirect()->route('profile');
    }
}
