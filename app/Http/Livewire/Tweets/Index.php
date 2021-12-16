<?php

namespace App\Http\Livewire\Tweets;

use Livewire\Component;

// import model Tweet
use App\Models\Tweet;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $countPage = 4;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['tweetAdd'];

    public function tweetAdd()
    {
        
    }

    public function render()
    {
        $tweets = Tweet::latest()->paginate($this->countPage);
        return view('livewire.tweets.index', compact('tweets'));
    }
}
