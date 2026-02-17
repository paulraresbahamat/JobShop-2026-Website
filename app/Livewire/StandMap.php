<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Stand;
use Illuminate\Support\Facades\Auth;

class StandMap extends Component
{
    public function render()
    {
        return view('livewire.stand-map', [
            'stands' => Stand::orderBy('number')->get()
        ]);
    }

    public function selectStand($number)
    {   
        if (!Auth::check()) {
            session()->flash('error', 'Please log in to select a stand.');
            return;
        }

        $user = Auth::user();

        $stand = Stand::where('number', $number)->first();
        
        if ($stand->user_id) {
            if ($stand->user_id == $user->id) {
                $stand->update(['user_id' => null, 'company_name' => null]);
                return;
            }
            session()->flash('error', 'This stand is already occupied!');
            return;
        }

        if (Stand::where('user_id', $user->id)->exists()) {
            session()->flash('error', 'You have already chosen a stand!');
            return;
        }

        $stand->update([
            'user_id' => $user->id,
            'company_name' => $user->name,
        ]);
    }
};
?>