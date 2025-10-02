<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;

class UsersTable extends Component
{
    public string $search = '';

    public function render()
    {
        $query = User::orderByDesc('created_at');
        if ($this->search !== '') {
            $like = '%' . $this->search . '%';
            $query->where(function ($q) use ($like) {
                $q->where('name', 'like', $like)
                  ->orWhere('email', 'like', $like);
            });
        }

        $users = $query->limit(50)->get(['id','name','email','created_at']);

        return view('livewire.admin.users-table', [
            'users' => $users,
        ]);
    }
}


