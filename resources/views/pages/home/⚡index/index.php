<?php

use Livewire\Component;
use App\Models\User;
use App\Models\Process;
use Illuminate\Support\Collection;

new class extends Component
{
    public $process;
    public string $input_one = '';
    public ?array $userIds = [];
    public Collection $users;

    public function mount()
    {
        $this->process = Process::find(1);
        $this->input_one = $this->process->input_one;

        $this->search();
    }

    public function search(string $value = '')
    {
        // Besides the search results, you must include on demand selected option
        $selectedOption = User::whereIn('id', $this->userIds)->get();

        $this->users = User::query()
            ->where('name', 'like', "%$value%")
            ->take(5)
            ->orderBy('name')
            ->get()
            ->merge($selectedOption);     // <-- Adds selected option 
    }

};
