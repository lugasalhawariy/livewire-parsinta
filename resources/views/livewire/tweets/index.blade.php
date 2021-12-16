<div>
    @livewire('tweets.add')

    <div class="card">
        <div class="card-header">{{ __('Dashboard') }}</div>

        <div class="card-body">

            @foreach ($tweets as $tweet)
                @livewire('tweets.single', ['tweet' => $tweet], key($tweet->id))
            @endforeach
            <br><br>
            {{ $tweets->links() }}
            
        </div>
    </div>
</div>
