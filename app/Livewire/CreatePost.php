<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create a Post')]
class CreatePost extends Component
{
    public $title = 'Special Post Title';

    public function render()
    {
        return view('livewire.create-post')->with([
            'author' => Auth::user()?->name ?? "Guest",
        ]);
    }

    public function save()
    {
        $post = Post::create([
            'title' => $this->title,
            'author' => 'Unknown',
        ]);

        return redirect()->to('/posts')
             ->with('status', 'Post created!');
    }
}
