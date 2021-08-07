<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.client.index', [
            'clients' => Client::orderby('name', 'ASC')->paginate(24)
        ]);
    }
}
