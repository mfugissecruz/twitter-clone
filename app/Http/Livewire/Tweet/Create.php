<?php

namespace App\Http\Livewire\Tweet;

use App\Models\Tweet;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public string $body;

    public function tweet(): void
    {
        Tweet::query()->create([
            'body' => $this->body,
            'created_by' => Auth::id(),
        ]);

        $this->emit('tweet:created');
    }

    public function render(): View
    {
        return view('livewire.tweet.create');
    }
}
