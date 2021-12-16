<?php

namespace App\Http\Livewire\Tweets;

use Livewire\Component;

class Add extends Component
{
    public $body;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'body' => 'min:3|max:255'
        ]);
    }

    public function addTweet()
    {
        // validasi
        $this->validate([
            'body' => 'required|max:255'
        ]);

        //buat data
        $tweet = auth()->user()->tweet()->create([
            'body' => $this->body
        ]);

        $this->body = null;

        session()->flash('message', 'Hore berhasil buat tweet!');

        // kita buat emit agar ter-refresh otomatis
        $this->emit('tweetAdd', $tweet->id);
    }   

    public function render()
    {
        return view('livewire.tweets.add');
    }
}
