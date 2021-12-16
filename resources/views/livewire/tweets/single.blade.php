<div class="media">
    <img class="align-self-start rounded-circle mr-3" src="{!! gravatar()->src($tweet->user->email, 45) !!}">
    <div class="media-body">
        <h5 class="mb-0">{{ $tweet->user->name }}</h5>
        <p>
            {{ $tweet->body }}
        </p>
    </div>
</div>
