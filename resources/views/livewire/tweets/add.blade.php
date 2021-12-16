<div>
    @if(session('message'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> {{ session('message') }}
        </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">{{ config('app.name') }}</div>
        <div class="card-body">
            <form method="post" wire:submit.prevent="addTweet">
                <div class="form-group">
                    <textarea class="form-control mb-2" autofocus style="resize: none" wire:model="body" placeholder="What's your mind?"></textarea>
                    @error('body')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-right">
                    <button class="btn btn-primary" type="submit" @error('body') disabled @enderror>Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>