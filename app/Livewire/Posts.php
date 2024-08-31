<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Posts extends Component
{
    public Collection $posts;

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts', [
            'posts' => $this->posts,
        ]);
    }
}
